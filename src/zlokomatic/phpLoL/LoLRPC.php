<?php

namespace zlokomatic\phpLoL;

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

        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.summoner.PublicSummoner', '\zlokomatic\phpLoL\amf\summoner\Summoner');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.summoner.AllPublicSummonerDataDTO', '\zlokomatic\phpLoL\amf\summoner\SummonerData');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.summoner.SummonerGameModeSpells', '\zlokomatic\phpLoL\amf\summoner\GameModeSpells');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.summoner.spellbook.SpellBookDTO', '\zlokomatic\phpLoL\amf\summoner\spellbook\SpellBook');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.summoner.spellbook.SpellBookPageDTO', '\zlokomatic\phpLoL\amf\summoner\spellbook\SpellBookPage');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.summoner.spellbook.SlotEntry', '\zlokomatic\phpLoL\amf\summoner\spellbook\SpellBookSlotEntry');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.summoner.RuneSlot', '\zlokomatic\phpLoL\amf\summoner\RuneSlot');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.catalog.runes.RuneType', '\zlokomatic\phpLoL\amf\catalog\runes\RuneType');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.catalog.runes.Rune', '\zlokomatic\phpLoL\amf\catalog\runes\Rune');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.catalog.ItemEffect', '\zlokomatic\phpLoL\amf\catalog\ItemEffect');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.catalog.Effect', '\zlokomatic\phpLoL\amf\catalog\Effect');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.summoner.SummonerDefaultSpells', '\zlokomatic\phpLoL\amf\summoner\SummonerDefaultSpells');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.summoner.SummonerTalentsAndPoints', '\zlokomatic\phpLoL\amf\summoner\SummonerTalentsAndPoints');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.summoner.SummonerLevelAndPoints', '\zlokomatic\phpLoL\amf\summoner\SummonerLevelAndPoints');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.summoner.SummonerLevel', '\zlokomatic\phpLoL\amf\summoner\SummonerLevel');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.summoner.BasePublicSummonerDTO', '\zlokomatic\phpLoL\amf\summoner\BasePublicSummoner');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.RecentGames', '\zlokomatic\phpLoL\amf\statistics\RecentGames');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.PlayerGameStats', '\zlokomatic\phpLoL\amf\statistics\PlayerGameStats');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.FellowPlayerInfo', '\zlokomatic\phpLoL\amf\statistics\FellowPlayerInfo');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.RawStat', '\zlokomatic\phpLoL\amf\statistics\RawStat');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.PlayerLifetimeStats', '\zlokomatic\phpLoL\amf\statistics\PlayerLifetimeStats');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.PlayerStatSummaries', '\zlokomatic\phpLoL\amf\statistics\PlayerStatSummaries');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.PlayerStatSummary', '\zlokomatic\phpLoL\amf\statistics\PlayerStatSummary');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.SummaryAggStats', '\zlokomatic\phpLoL\amf\statistics\SummaryAggStats');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.SummaryAggStat', '\zlokomatic\phpLoL\amf\statistics\SummaryAggStat');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.LeaverPenaltyStats', '\zlokomatic\phpLoL\amf\statistics\LeaverPenaltyStats');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.PlayerStats', '\zlokomatic\phpLoL\amf\statistics\PlayerStats');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.TimeTrackedStat', '\zlokomatic\phpLoL\amf\statistics\TimeTrackedStat');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.AggregatedStats', '\zlokomatic\phpLoL\amf\statistics\AggregatedStats');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.AggregatedStat', '\zlokomatic\phpLoL\amf\statistics\AggregatedStat');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.statistics.AggregatedStatsKey', '\zlokomatic\phpLoL\amf\statistics\AggregatedStatsKey');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.platform.leagues.client.dto.SummonerLeaguesDTO', '\zlokomatic\phpLoL\amf\leagues\SummonerLeagues');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.leagues.pojo.LeagueListDTO', '\zlokomatic\phpLoL\amf\leagues\LeagueList');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.leagues.pojo.LeagueItemDTO', '\zlokomatic\phpLoL\amf\leagues\LeagueItem');
        \SabreAMF_ClassMapper::registerClass('com.riotgames.leagues.pojo.MiniSeriesDTO', '\zlokomatic\phpLoL\amf\leagues\MiniSeries');

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



        $body = new \SabreAMF_TypedObject("com.riotgames.platform.login.AuthenticationCredentials", $data);

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
        
        $result = $this->invoke("messagingDestination", 0, null, "flex.messaging.messages.CommandMessage", $headers, $body);
        
        $headers = array('DSSubtopic' => 'cn-' . $this->accountId);
        $body = array('clientId' => 'cn-' . $this->accountId);
        
        $result = $this->invoke("messagingDestination", 0, null, "flex.messaging.messages.CommandMessage", $headers, $body);
        
        $headers = array('DSSubtopic' => 'gn-' . $this->accountId);
        $body = array('clientId' => 'gn-' . $this->accountId);
        
        $result = $this->invoke("messagingDestination", 0, null, "flex.messaging.messages.CommandMessage", $headers, $body);
        
        
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
        $result = $result['body'];
        return $result;
    }

    public function getAllPublicSummonerDataByAccount($accountId)
    {
        $result = $this->invoke("summonerService", "getAllPublicSummonerDataByAccount", $accountId);
        $result = $result['data']->getData();
        $result = $result['body'];
        return $result;
    }

    public function getSummonerNames(array $accountIds)
    {
        $result = $this->invoke("summonerService", "getSummonerNames", $accountIds);
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
        $result = $result['body'];
        return $result;
    }

    public function getPlayerStatsByAccountId($accountId)
    {
        $result = $this->invoke("playerStatsService", "retrievePlayerStatsByAccountId", $accountId);
        $result = $result['data']->getData();
        $result = $result['body'];
        return $result;
    }

    public function getAggregatedStats($accountId)
    {
        $result = $this->invoke("playerStatsService", "getAggregatedStats", $accountId);
        $result = $result['data']->getData();
        $result = $result['body'];
        return $result;
    }

    public function getAllLeaguesForPlayer($summonerId)
    {
        $result = $this->invoke("leaguesServiceProxy", "getAllLeaguesForPlayer", $summonerId);
        $result = $result['data']->getData();
        $result = $result['body'];
        return $result;
    }

    /*
    private function heartbeat()
    {
         $result = $this->invoke('loginService', 'performLCDSHeartBeat', new \SabreAMF_TypedObject("", array($this->accountId, $this->token, 1, (date("0d M d Y H:i:s ") . "GTMZ"))));   
         print_r($result);
    }
     */
}




