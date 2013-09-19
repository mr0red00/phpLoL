<?php

namespace zlokomatic\phpLoL;

class LoLAuth 
{

    private $config;
    private $username;
    private $password;
    private $queue_urls = array('auth' => '/login-queue/rest/queue/authenticate',
                                'ticker' => '/login-queue/rest/queue/ticker',
                                'token' => '/login-queue/rest/queue/authToken',
                               );
    function __construct($config, $username, $password)
    {
        $this->config = $config;
        $this->username = $username;
        $this->password = $password;
    }

    public function login()
    {
        if(!ini_get('allow_url_fopen')) {
            throw new LoginException("php.ini: allow_url_fopen not enabled");
        }
        $data  = "payload=" . urlencode("user={$this->username},password={$this->password}");
        $opts = array(
          'http'=>array(
            'method'=>"POST",
            'header'=> "Referer: app:/LolClient.swf/[[DYNAMIC]]/9\r\n" .
                       "Accept: text/xml, application/xml, application/xhtml+xml, text/html;q=0.9, text/plain;q=0.8, text/css, image/png, image/jpeg, image/gif;q=0.8, application/x-shockwave-flash, video/mp4;q=0.9, flv-application/octet-stream;q=0.8, video/x-flv;q=0.7, audio/mp4, application/futuresplash, */*;q=0.5\r\n" .
            "Content-Type: application/x-www-form-urlencoded\r\n" .
             "Content-Length: " . strlen($data) . "\r\n",
            'content' => $data,
          )
        );
        $context = stream_context_create($opts);
        $fp = @fopen("https://{$this->config->getLoginUrl()}{$this->queue_urls['auth']}", 'r', false, $context);
        if(!$fp){
            preg_match("/HTTP\/1\.1 (?P<code>\d{3}).*/", $http_response_header[0], $matches);
           if($matches['code'] == 403){
               throw new LoginException("Invalid username or password");
           }
           else{
               throw new LoginException("No Connection to login server");
           }
        }
        $response = trim(stream_get_contents($fp));
        fclose($fp);
        $data = json_decode($response, true);
        
        switch($data['status']){
            case 'QUEUE':
                return array($data['user'], $this->queue($data));
            case 'LOGIN':
                return array($data['user'] , $data['token']);
            default:
                die("LOGIN ERROR");
        }
    }

    private function queue($data)
    {
        $ticker = NULL;
        foreach($data['tickers'] as $ticker){
            if($ticker['node'] == $data['node']){
                break;
            }
        }
        $id = $ticker['id'];
        $curr = $ticker['current'];
        $rate = $data['rate'];
        while($curr < $id){
            $pos = $id - $curr;
            print "LoLAuth queue {$pos} sleeping: {$rate}...\n";
            sleep($rate/10);
            $curr = $this->ticker($data['champ'], $ticker['node']);
        }
        return $this->token($data['user']);
    }

    private function ticker($champ, $node)
    {
        $opts = array(
          'http'=>array(
            'method'=>"GET",
            'header'=> "Referer: app:/LolClient.swf/[[DYNAMIC]]/9\r\n" .
                       "Accept: text/xml, application/xml, application/xhtml+xml, text/html;q=0.9, text/plain;q=0.8, text/css, image/png, image/jpeg, image/gif;q=0.8, application/x-shockwave-flash, video/mp4;q=0.9, flv-application/octet-stream;q=0.8, video/x-flv;q=0.7, audio/mp4, application/futuresplash, */*;q=0.5\r\n",
          )
        );
        $context = stream_context_create($opts);
        $fp = fopen("https://{$this->config->getLoginUrl()}{$this->queue_urls['ticker']}/{$champ}", 'r', false, $context);
        $response = trim(stream_get_contents($fp));
        fclose($fp);
        $ticks = json_decode($response, true);
        foreach($ticks as $k => &$v){
            $v = intval($v, 16);
        }
        return $ticks[$node];
    }

    private function token($user)
    {
        $retries = 0;
        while($retries <= 5){
            $retries++;
            $opts = array(
              'http'=>array(
                'method'=>"GET",
                'header'=> "Referer: app:/LolClient.swf/[[DYNAMIC]]/9\r\n" .
                           "Accept: text/xml, application/xml, application/xhtml+xml, text/html;q=0.9, text/plain;q=0.8, text/css, image/png, image/jpeg, image/gif;q=0.8, application/x-shockwave-flash, video/mp4;q=0.9, flv-application/octet-stream;q=0.8, video/x-flv;q=0.7, audio/mp4, application/futuresplash, */*;q=0.5\r\n",
              )
            );
            $context = stream_context_create($opts);
            $fp = fopen("https://{$this->config->getLoginUrl()}{$this->queue_urls['token']}/{$user}", 'r', false, $context);
            $response = trim(stream_get_contents($fp));
            fclose($fp);
            $token = json_decode($response, true);
            if($token['status'] == 'JOIN'){
                return $token['token'];
            }
        }
    }
 
}
