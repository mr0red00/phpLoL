<?php

namespace zlokomatic\phpLoL;

class LoLConfig
{
    private $clientVersion = "3.12.13_10_01_11_40";
    private $region;
    private $regions = array('EUW', 'EUNE', 'NA', 'BR');
    private $login_queue_host = array('EUW' => 'lq.eu.lol.riotgames.com',
                                      'EUNE' => 'lq.eun1.lol.riotgames.com',
                                      'NA' => 'lq.na1.lol.riotgames.com',
                                      'BR' => 'lq.br.lol.riotgames.com',
                                     );
    private $rpc_host = array('EUW' => 'prod.eu.lol.riotgames.com',
                              'EUNE' => 'prod.eun1.lol.riotgames.com',
                              'NA' => 'prod.na1.lol.riotgames.com',
                              'BR' => 'prod.br.lol.riotgames.com',
                             );

    public function __construct($region)
    {
        if(in_array($region, $this->regions)){
            $this->region = $region;
        }
        else{
            throw new LoLConfigException("No such region: {$region}");
        }
    }
    
    public function getClientVersion()
    {
        return $this->clientVersion;
    }

    public function getLoginUrl(){
        if(!empty($this->region)){
            return $this->login_queue_host[$this->region];
        }
    }

    public function getRPCUrl(){
        if(!empty($this->region)){
            return $this->rpc_host[$this->region];
        }
    }

}
