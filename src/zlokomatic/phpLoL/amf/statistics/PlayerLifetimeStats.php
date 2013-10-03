<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 22:48
 */

namespace zlokomatic\phpLoL\amf\statistics;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class PlayerLifetimeStats extends LoLAMFBase {

    protected $playerStatSummaries;
    protected $leaverPenaltyStats;
    protected $previousFirstWinOfDay;
    protected $userId;
    protected $dodgeStreak;
    protected $dodgePenalty;
    protected $dodgePenaltyDate;
    protected $playerStatsJson;
    protected $playerStats;

    /**
     * @param mixed $dodgePenalty
     */
    public function setDodgePenalty($dodgePenalty)
    {
        $this->dodgePenalty = $dodgePenalty;
    }

    /**
     * @return mixed
     */
    public function getDodgePenalty()
    {
        return $this->dodgePenalty;
    }

    /**
     * @param mixed $dodgePenaltyDate
     */
    public function setDodgePenaltyDate($dodgePenaltyDate)
    {
        $this->dodgePenaltyDate = $dodgePenaltyDate;
    }

    /**
     * @return mixed
     */
    public function getDodgePenaltyDate()
    {
        return $this->dodgePenaltyDate;
    }

    /**
     * @param mixed $dodgeStreak
     */
    public function setDodgeStreak($dodgeStreak)
    {
        $this->dodgeStreak = $dodgeStreak;
    }

    /**
     * @return mixed
     */
    public function getDodgeStreak()
    {
        return $this->dodgeStreak;
    }

    /**
     * @param mixed $leaverPenaltyStats
     */
    public function setLeaverPenaltyStats($leaverPenaltyStats)
    {
        $this->leaverPenaltyStats = $leaverPenaltyStats;
    }

    /**
     * @return mixed
     */
    public function getLeaverPenaltyStats()
    {
        return $this->leaverPenaltyStats;
    }

    /**
     * @param mixed $playerStatSummaries
     */
    public function setPlayerStatSummaries($playerStatSummaries)
    {
        $this->playerStatSummaries = $playerStatSummaries;
    }

    /**
     * @return mixed
     */
    public function getPlayerStatSummaries()
    {
        return $this->playerStatSummaries;
    }

    /**
     * @param mixed $playerStats
     */
    public function setPlayerStats($playerStats)
    {
        $this->playerStats = $playerStats;
    }

    /**
     * @return mixed
     */
    public function getPlayerStats()
    {
        return $this->playerStats;
    }

    /**
     * @param mixed $playerStatsJson
     */
    public function setPlayerStatsJson($playerStatsJson)
    {
        $this->playerStatsJson = $playerStatsJson;
    }

    /**
     * @return mixed
     */
    public function getPlayerStatsJson()
    {
        return $this->playerStatsJson;
    }

    /**
     * @param mixed $previousFirstWinOfDay
     */
    public function setPreviousFirstWinOfDay($previousFirstWinOfDay)
    {
        $this->previousFirstWinOfDay = $previousFirstWinOfDay;
    }

    /**
     * @return mixed
     */
    public function getPreviousFirstWinOfDay()
    {
        return $this->previousFirstWinOfDay;
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