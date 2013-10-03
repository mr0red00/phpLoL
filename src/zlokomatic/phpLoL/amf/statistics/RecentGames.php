<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 15:05
 */

namespace zlokomatic\phpLoL\amf\statistics;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class RecentGames extends LoLAMFBase {
    protected $recentGamesJson;
    protected $playerGameStatsMap;
    protected $gameStatistics = array();
    protected $userId;

    /**
     * @param mixed $gameStatistics
     */
    public function setGameStatistics($gameStatistics)
    {
        foreach($gameStatistics as $stat){
            $this->gameStatistics[] = $stat;
        }
    }

    /**
     * @return mixed
     */
    public function getGameStatistics()
    {
        return $this->gameStatistics;
    }

    /**
     * @param mixed $playerGameStatsMap
     */
    public function setPlayerGameStatsMap($playerGameStatsMap)
    {
        $this->playerGameStatsMap = (array) $playerGameStatsMap;
    }

    /**
     * @return mixed
     */
    public function getPlayerGameStatsMap()
    {
        return $this->playerGameStatsMap;
    }

    /**
     * @param mixed $recentGamesJson
     */
    public function setRecentGamesJson($recentGamesJson)
    {
        $this->recentGamesJson = $recentGamesJson;
    }

    /**
     * @return mixed
     */
    public function getRecentGamesJson()
    {
        return $this->recentGamesJson;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }


} 