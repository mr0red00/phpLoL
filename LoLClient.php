<?php

require_once 'LoLConfig.php';
require_once 'LoLAuth.php';
require_once 'LoLException.php';
require_once 'LoLRPC.php';

require_once 'Logging/KLogger.php';

class LoLClient
{
    private $config;
    private $rtmp;

    public function __construct($username, $password, $region='EUW')
    {
        KLogger::instance(false, LoLConfig::LOGLEVEL)->logInfo("LoLClient startup");
        $this->config = new LoLConfig($region);
        $l = new LoLAuth($this->config, $username, $password);
        $auth = array();
        try{
            $auth = $l->login();
        }
        catch(LoginException $e){
            print $e->getMessage() . PHP_EOL;
            die();
        }
        KLogger::instance(false, LoLConfig::LOGLEVEL)->logInfo("LoLClient login part 1 finished");
        
        $this->rtmp = new LoLRPC($this->config->getClientVersion());
        if($this->rtmp->connect("rtmps", $this->config->getRPCUrl(),2099, "", "app:/mod_ser.dat")){
            $this->rtmp->login($username, $password, $auth[1]);
        }
        KLogger::instance(false, LoLConfig::LOGLEVEL)->logInfo("LoLClient logged in");
    }

    public function __call($name, $arguments)
    {
        if(count($arguments) == 0){
            $arguments = $arguments[0];
        }
        if(method_exists($this->rtmp, $name)){
            $result = $this->rtmp->$name($arguments);
            return $result;
        }
        return false;
    }
}
