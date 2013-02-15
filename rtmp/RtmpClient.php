<?php

$inc_path = get_include_path();
$inc_path .= PATH_SEPARATOR . "./rtmp" . PATH_SEPARATOR . "./SabreAMF";
set_include_path($inc_path);

require_once 'rtmp/SabreAMF/OutputStream.php';
require_once 'rtmp/SabreAMF/InputStream.php';
require_once 'rtmp/SabreAMF/AMF0/Serializer.php';
require_once 'rtmp/SabreAMF/AMF0/Deserializer.php';
require_once 'rtmp/SabreAMF/TypedObject.php';

class ConnectionErrorException extends Exception {}
class HandshakeErrorException extends Exception {}
class ProtocoleErrorException extends Exception {}

class RTMPClient
{
    private $protocol;
    private $host;
    private $port;
    private $app;
    private $swfUrl;
    private $pageUrl;
    private $socket;
    private $start;
    private $connected = false;
    private $dsId;
    private $invokeId = 1;

    public function connect($protocol, $host, $port=1935, $app="", $swfUrl=null, $pageUrl=null)
    {
        $this->protocol = $protocol;
        $this->host = $host;
        $this->port = $port;
        $this->app = $app;
        $this->swfUrl = $swfUrl;
        $this->pageUrl = $pageUrl;
        $this->start = (int)microtime(true)*1000;

        switch($protocol){
            case "rtmps":
                $protocol = 'ssl';
                break;
            case "rtmp":
                $protocol = 'tcp';
                break;
            default:
                throw new ProtocolErrorException();
        }
        $this->socket = stream_socket_client("{$protocol}://{$host}:{$port}", $errorno, $errorstr);

        if($errorno != 0){
            throw new ConnectionErrorException($errorstr);
        }

        if($this->doHandshake()){
            $this->doConnect();
        }


        return true;
    }

    private function doHandshake()
    {
            //C0
            $this->send("\x03");

            //C1
            $c1_time = pack("N", time());
            $c1_string = $c1_time . pack("N", 0);
            $c1_rand = str_pad("", 1528, 'x');
            $c1_string .= $c1_rand;
            $this->send($c1_string);

            //S0
            $version = unpack("C", $this->read(1))[1];

            if($version != 3){
                die("ERROR");
            }

            //S1
            $s1 = $this->read(1536);

            //C2
            $s1_time = pack("N", time());
            $this->send(substr($s1, 0, 4));
            $this->send($s1_time);
            $s1_rand = substr($s1, 8);
            $this->send($s1_rand);

            //S2
            $s2 = $this->read(1536);

            $valid = true;
            for($i = 8; $i < 1536; $i++){
                if(substr($c1_rand, $i-8, 1) != substr($s2, $i, 1)){
                    $valid = false;
                    break;
                }
            }
            if(!$valid){
                throw new HandshakeErrorException("Handshake failed");
            }
            return true;
    }

    public function doConnect()
    {
        $connectParams = array('objectEncoding' => 3,
                               'app' => $this->app,
                               'fpad' => false,
                               'flashVer' => 'WIN 10,1,85,3',
                               'tcUrl' => "{$this->protocol}://{$this->host}:{$this->port}",
                               'audioCodecs' => 3191,
                               'videoFunction' => 1,
                               'pageUrl' => $this->pageUrl,
                               'capabilities' => 239,
                               'swfUrl' => $this->swfUrl, 
                               'videoCodecs' => 252,
                               );


        $stream = new SabreAMF_OutputStream();
        $serializer = new SabreAMF_AMF0_Serializer($stream);
        $serializer3 = new SabreAMF_AMF3_Serializer($stream);

        $serializer->writeAMFData("connect");
        $serializer->writeAMFData($this->invokeId++);
        $stream->writeByte(0x11);
        $stream->writeByte(0x09);

        //params
        $serializer3->writeAMFData(null);
        foreach($connectParams as $key => $value){
            $serializer3->writeString($key);
            $serializer3->writeAMFData($value);
        }
        $serializer3->writeAMFData(null);

        //Service call
        $stream->writeByte(0x01);
        $stream->writeByte(0x00);
        $serializer->writeAMFData('nil');
        $serializer->writeAMFData('', SabreAMF_AMF0_Const::DT_STRING);

        
        $cmdmsg = new SabreAMF_AMF3_CommandMessage();

        $headers = array('DSMessagingVersion' => 1.0,
                         'DSId' => 'my-rtmps');

        $data = array('headers' => $headers,
                      'timestamp' => 0.0,
                      'body' => new SabreAMF_TypedObject("",array()),
                      'operation' => 5,
                      'messageRefType' => null,
                      'correlationId' => '',
                      'messageId' => $cmdmsg->generateRandomId(),
                      'timeToLive' => 0.0,
                      'clientId' => null,
                      'destination' => '',
                      );



        $cm = new SabreAMF_TypedObject("flex.messaging.messages.CommandMessage", $data);
        $stream->writeByte(0x11);
        $serializer3->writeAMFData($cm);

        $res = $this->addHeader($stream->getRawData());
        $res[7] = chr(0x14);
        $this->send($res);

        $response = $this->readResponse();

        $this->dsId = $response['data']['id'];

        return $response;
    }

    

    private function send($data)
    {
        fwrite($this->socket, $data);
    }

    private function read($length)
    {
        return fread($this->socket, $length);
    }

    private function addHeader($data)
    {
        //Header
        $result = chr(0x03);
        //Timestamp
        $time = microtime(true)*1000;
        $diff = (int)($time - $this->start);

        $result .= chr((($diff & 0xFF0000) >> 16));
        $result .= chr((($diff & 0x00FF00) >> 8));
        $result .= chr((($diff & 0x0000FF)));

        //Body size
        $result .= chr(((strlen($data) & 0xFF0000) >> 16));
        $result .= chr(((strlen($data) & 0x00FF00) >> 8));
        $result .= chr(((strlen($data) & 0x0000FF)));

        
        //Content type
        $result .= chr(0x11);
        
        //Source ID
        $result .= chr(0x00);
        $result .= chr(0x00);
        $result .= chr(0x00);
        $result .= chr(0x00);

        for($i = 0; $i < strlen($data); $i++)
        {
            $result .= substr($data, $i, 1);

            if($i % 128 == 127 && $i != (strlen($data) - 1)){
                $result .= chr(0xC3);
            }
        }
        //$this->send($result);
        return $result;
    }

    private function readResponse()
    {
        $packets = array();

        while(true){
            $headerBasic = ord($this->read(1));

            $channel = $headerBasic & 0x2F;
            $headerType = $headerBasic & 0xC0;

            $headerSize = 0;

            switch($headerType){
                case 0x00:
                    $headerSize = 12;
                    break;
                case 0x40:
                    $headerSize = 8;
                    break;
                case 0x80:
                    $headerSize = 4;
                    break;
                case 0xC0:
                    $headerSize = 1;
                    break;
            }
            
            if(!array_key_exists($channel, $packets)){
                $packets[$channel] = array('data' => '');
            }

            $packet = &$packets[$channel];

            if($headerSize > 1){
                $header = $this->read($headerSize-1);

                if($headerSize >= 8){
                    $size = 0;
                    for($i = 3; $i < 6; $i++){
                        $size *= 256;
                        $size += ((ord(substr($header, $i, 1))) & 0xFF);
                    }

                    $packet['size'] = $size;
                    $packet['type'] = ord($header[6]);
                }
            }

            for($i = 0; $i < 128; $i++){
                if(!feof($this->socket)){
                    $packet['data'] .= $this->read(1);
                }

                if(strlen($packet['data']) == $packet['size']){
                    break;
                }
            }

            $len = strlen($packet['data']);
            if(!(strlen($packet['data']) == $packet['size'])){
                continue;
            }

            unset($packets[$channel]);

            $result = null;
            if($packet['type'] == 0x03 || $packet['type'] == 0x06){
                continue;
            }
            elseif($packet['type'] == 0x11){
                    $result = array();

                    $stream = new SabreAMF_InputStream($packet['data']);

                     if($stream->readByte() == 0x00){
                        $result['version'] = 0x00;
                        $packet['data'] = substr($packet['data'] ,1 , strlen($packet['data']));
                    }

                    $deserializer = new SabreAMF_AMF0_Deserializer($stream);
                    $result['result'] = $deserializer->readAMFData();
                    $result['invokeId'] = $deserializer->readAMFData();
                    $result['serviceCall'] = $deserializer->readAMFData();
                    $result['data'] = $deserializer->readAMFData();  
            }
            elseif($packet['type'] == 0x14){
                    $result = array();
                    $stream = new SabreAMF_InputStream($packet['data']);
                    $deserializer = new SabreAMF_AMF0_Deserializer($stream);
                    $result['result'] = $deserializer->readAMFData();
                    $result['invokeId'] = $deserializer->readAMFData();
                    $result['serviceCall'] = $deserializer->readAMFData();
                    $result['data'] = $deserializer->readAMFData();                
            }
            else{
                //Unhandled Packet
            }

            if(!isset($result)){
                die("SOMETHING WENT WRONG AFTER DECODING PACKET\n");
            }
            $id = $result['invokeId'];

            if($id == null || $id == 0){
                //CALLBACK
            }
            elseif(false){
                //CALLBACK2
            }
            else{
                return $result;
                
            }
        }
    }

    protected function invoke()
    {
        $cm = null;
        if(func_num_args() >= 3){
            $add_header = array();
            $add_body = array();
            $destination = func_get_arg(0);
            $operation = func_get_arg(1);
            $body = func_get_arg(2);
            if(func_num_args() > 3){
                $type = func_get_arg(3);
            }
            else{
                $type = "flex.messaging.messages.RemotingMessage";
            }
            
            if(func_num_args() > 4){
                $add_header = func_get_arg(4);
            }
            
            if(func_num_args() > 5){
                $add_body = func_get_arg(5);
            }
            
            
            $cmdmsg = new SabreAMF_AMF3_RemotingMessage();

            $headers = array('DSRequestTimeout' => 60,
                             'DSId' => $this->dsId,
                             'DSEndpoint' => 'my-rtmps',
                            );

            foreach($add_header as $k => $v){
                $headers[$k] = $v;
            }
                   
            $headers_cm = new SabreAMF_TypedObject(null, $headers);
            $data = array('headers' => $headers_cm,
                          'timestamp' => 0,
                          'body' => $body,
                          'operation' => $operation,
                          'source' => null,
                          'messageId' => $cmdmsg->generateRandomId(),
                          'clientId' => null,
                          'timeToLive' => 0,
                          'destination' => $destination,
                          );

            foreach($add_body as $k => $v){
                $data[$k] = $v;
            }
            
            $cm = new SabreAMF_TypedObject($type, $data);
        }
        else{
            $cm = func_get_arg(0);
        }

        if($cm != null){
            $stream = new SabreAMF_OutputStream();
            $serializer = new SabreAMF_AMF0_Serializer($stream);
            $serializer3 = new SabreAMF_AMF3_Serializer($stream);
            $stream->writeByte(0x00);
            $stream->writeByte(0x05);
            $serializer->writeAMFData($this->invokeId++);
            $stream->writeByte(0x05);
            $stream->writeByte(0x11);
            $serializer3->writeAMFData($cm);

            $res = $this->addHeader($stream->getRawData());
            //$data = file_get_contents("/tmp/blajava");
            $this->send($res);
            var_dump("INVOKE");

            //$this->read(1);
            //$this->read(1);

            $response = $this->readResponse(1);

            if($response['result'] == '_error'){
                $data = $response['data']->getData();
                throw new Exception($data->faultString);
            }
            
            return $response;
        }

    }

}

/*
//$rtmp->connect("rtmp", "192.168.2.32", "2099", "" , "app:/mod_ser.dat");
//$rtmp->connect("rtmp", "192.168.2.32", "1935", "", "app:/mod_ser.dat");
*/
/*
$rtmp = new RtmpClient;
$rtmp->connect("rtmps", "prod.eu.lol.riotgames.com", "2099", "" , "app:/mod_ser.dat");
$rtmp->doConnect();
*/

