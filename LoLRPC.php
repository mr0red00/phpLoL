<?php

$inc_path = get_include_path();
$inc_path .= PATH_SEPARATOR . "./rtmp" . PATH_SEPARATOR . "./rtmp/SabreAMF";
set_include_path($inc_path);

require_once 'rtmp/RtmpClient.php';

class LoLRPC extends RtmpClient
{
    private $clientVersion = "ClientVersion";
    private $loggedIn = false;
    private $accountId;
    private $token;

    public function __construct($clientVersion = null)
    {
        if($clientVersion != null){
            $this->clientVersion = $clientVersion;
        }
    }
    public function login($username, $password, $credentials, $partner = null)
    {
        //Get Ip
        $ip = '127.0.0.1';
        $resp = @file_get_contents("http://ll.leagueoflegends.com/services/connection_info");
        $resp = false;
        if($resp != false){
            $res = json_decode($resp);
            $ip = $res->ip_address;
        }

        $data = array('operatingSystem' => 'LoLRTMPSClient',
                      'username' => $username,
                      'partnerCredentials' => $partner,
                      'locale' => 'en_US',
                      'domain' => 'lolclient.lol.riotgames.com',
                      'authToken' => $credentials,
                      'oldPassword' => null,
                      'clientVersion' => $this->clientVersion,
                      'password' => $password,
                      'securityAnswer' => null,
                      'ipAddress' => $ip,
                      );



        $body = new SabreAMF_TypedObject("com.riotgames.platform.login.AuthenticationCredentials", $data);

        $result = $this->invoke('loginService', 'login', array($body));
        
        $data = $result['data']->getData();
        $body = $data['body'];
        $this->token = $body->getAMFData();
        $this->token = $this->token['token'];
        $accountSummary = $body->getAMFData();
        $accountSummary = $accountSummary['accountSummary']->getAMFData();
        $this->accountId = $accountSummary['accountId'];

        $body = strtolower($username) . ":" . $this->token;
        $body = base64_encode($body);
        
        $result = $this->invoke("auth", 8, $body, "flex.messaging.messages.CommandMessage");

        $headers = array('DSSubtopic' => 'bc');
        $body = array('clientId' => 'bc-' . $this->accountId);
        
        $result = $this->invoke("messagingDestination", 0, new SabreAMF_TypedObject("", ""), "flex.messaging.messages.CommandMessage", $headers, $body);
        
        $headers = array('DSSubtopic' => 'cn-' . $this->accountId);
        $body = array('clientId' => 'cn-' . $this->accountId);
        
        $result = $this->invoke("messagingDestination", 0, new SabreAMF_TypedObject("", ""), "flex.messaging.messages.CommandMessage", $headers, $body);
        
        $headers = array('DSSubtopic' => 'gn-' . $this->accountId);
        $body = array('clientId' => 'gn-' . $this->accountId);
        
        $result = $this->invoke("messagingDestination", 0, new SabreAMF_TypedObject("", ""), "flex.messaging.messages.CommandMessage", $headers, $body);
        
        
        $this->loggedIn = true;
    }
    
    public function logout()
    {
        $this->loggedIn = false;
        $result = $this->invoke("loginService", "logout", array($this->token));
        print_r($result);
    }


    //SummonerService
    public function getSummonerByName($name)
    {
        $result = $this->invoke("summonerService", "getSummonerByName", $name);
        $result = $result['data']->getData();
        $result = $result['body']->getAMFData();
        return $result;
    }

    public function getAllPublicSummonerDataByAccount($id)
    {
        $result = $this->invoke("summonerService", "getAllPublicSummonerDataByAccount", $id);
        $result = $result['data']->getData();
        $result = $result['body']->getAMFData();
        return $result;
    }

    public function getSummonerNames($ids)
    {
        $result = $this->invoke("summonerService", "getSummonerNames", $ids);
        $result = $result['data']->getData();
        $summonerNames = array();
        $result = (array) $result['body']->getIterator();
        return $result;
    }
    
    //PlayerStatsService
    public function getRecentGames($accountId)
    {
        $result = $this->invoke("playerStatsService", "getRecentGames", $accountId);
        $result = $result['data']->getData();
        $result = $result['body']->getAMFData();
        return $result;
    }

    public function getPlayerStatsByAccountId($accountId)
    {
        $result = $this->invoke("playerStatsService", "retrievePlayerStatsByAccountId", $accountId);
        $result = $result['data']->getData();
        $result = $result['body']->getAMFData();
        return $result;
    }

    public function getAggregatedStats($accountId)
    {
        $result = $this->invoke("playerStatsService", "getAggregatedStats", $accountId);
        $result = $result['data']->getData();
        $result = $result['body']->getAMFData();
        return $result;
    }

    /*
    private function heartbeat()
    {
         $result = $this->invoke('loginService', 'performLCDSHeartBeat', new SabreAMF_TypedObject("", array($this->accountId, $this->token, 1, (date("0d M d Y H:i:s ") . "GTMZ"))));   
         print_r($result);
    }
     */
}




