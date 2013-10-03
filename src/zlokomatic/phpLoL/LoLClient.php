<?php

namespace zlokomatic\phpLoL;

class LoLClient
{
    private $config;
    private $rtmp;

    public function __construct($username, $password, $region='EUW')
    {
        $this->config = new LoLConfig($region);
        $l = new LoLAuth($this->config, $username, $password);
        $auth = array();
        $auth = $l->login();
        
        $this->rtmp = new LoLRPC($this->config->getClientVersion());
        if($this->rtmp->connect("rtmps", $this->config->getRPCUrl(),2099, "", "app:/mod_ser.dat")){
            $this->rtmp->login($username, $password, $auth[1]);
        }
    }

    public function __call($name, $arguments)
    {
        if(count($arguments) == 0){
            $arguments = $arguments[0];
        }
        if(method_exists($this->rtmp, $name)){
            //$result = call_user_func_array(array($this->rtmp, $name), $arguments);
            $result = $this->rtmp->$name($arguments);
            return $result;
        }
        return false;
    }
}
