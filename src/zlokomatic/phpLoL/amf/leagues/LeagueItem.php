<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 23:48
 */

namespace zlokomatic\phpLoL\amf\leagues;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class LeagueItem extends LoLAMFBase {

    protected $previousDayLeaguePosition;
    protected $timeLastDecayMessageShown;
    protected $hotStreak;
    protected $leagueName;
    protected $miniSeries;
    protected $tier;
    protected $freshBlood;
    protected $lastPlayed;
    protected $playerOrTeamId;
    protected $leaguePoints;
    protected $inactive;
    protected $rank;
    protected $veteran;
    protected $queueType;
    protected $losses;
    protected $timeUntilDecay;
    protected $playerOrTeamName;
    protected $wins;

    /**
     * @param mixed $freshBlood
     */
    public function setFreshBlood($freshBlood)
    {
        $this->freshBlood = $freshBlood;
    }

    /**
     * @return mixed
     */
    public function getFreshBlood()
    {
        return $this->freshBlood;
    }

    /**
     * @param mixed $hotStreak
     */
    public function setHotStreak($hotStreak)
    {
        $this->hotStreak = $hotStreak;
    }

    /**
     * @return mixed
     */
    public function getHotStreak()
    {
        return $this->hotStreak;
    }

    /**
     * @param mixed $inactive
     */
    public function setInactive($inactive)
    {
        $this->inactive = $inactive;
    }

    /**
     * @return mixed
     */
    public function getInactive()
    {
        return $this->inactive;
    }

    /**
     * @param mixed $lastPlayed
     */
    public function setLastPlayed($lastPlayed)
    {
        $this->lastPlayed = $lastPlayed;
    }

    /**
     * @return mixed
     */
    public function getLastPlayed()
    {
        return $this->lastPlayed;
    }

    /**
     * @param mixed $leagueName
     */
    public function setLeagueName($leagueName)
    {
        $this->leagueName = $leagueName;
    }

    /**
     * @return mixed
     */
    public function getLeagueName()
    {
        return $this->leagueName;
    }

    /**
     * @param mixed $leaguePoints
     */
    public function setLeaguePoints($leaguePoints)
    {
        $this->leaguePoints = $leaguePoints;
    }

    /**
     * @return mixed
     */
    public function getLeaguePoints()
    {
        return $this->leaguePoints;
    }

    /**
     * @param mixed $losses
     */
    public function setLosses($losses)
    {
        $this->losses = $losses;
    }

    /**
     * @return mixed
     */
    public function getLosses()
    {
        return $this->losses;
    }

    /**
     * @param mixed $playerOrTeamId
     */
    public function setPlayerOrTeamId($playerOrTeamId)
    {
        $this->playerOrTeamId = $playerOrTeamId;
    }

    /**
     * @return mixed
     */
    public function getPlayerOrTeamId()
    {
        return $this->playerOrTeamId;
    }

    /**
     * @param mixed $playerOrTeamName
     */
    public function setPlayerOrTeamName($playerOrTeamName)
    {
        $this->playerOrTeamName = $playerOrTeamName;
    }

    /**
     * @return mixed
     */
    public function getPlayerOrTeamName()
    {
        return $this->playerOrTeamName;
    }

    /**
     * @param mixed $previousDayLeaguePosition
     */
    public function setPreviousDayLeaguePosition($previousDayLeaguePosition)
    {
        $this->previousDayLeaguePosition = $previousDayLeaguePosition;
    }

    /**
     * @return mixed
     */
    public function getPreviousDayLeaguePosition()
    {
        return $this->previousDayLeaguePosition;
    }

    /**
     * @param mixed $queueType
     */
    public function setQueueType($queueType)
    {
        $this->queueType = $queueType;
    }

    /**
     * @return mixed
     */
    public function getQueueType()
    {
        return $this->queueType;
    }

    /**
     * @param mixed $rank
     */
    public function setRank($rank)
    {
        $this->rank = $rank;
    }

    /**
     * @return mixed
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @param mixed $tier
     */
    public function setTier($tier)
    {
        $this->tier = $tier;
    }

    /**
     * @return mixed
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * @param mixed $timeLastDecayMessageShown
     */
    public function setTimeLastDecayMessageShown($timeLastDecayMessageShown)
    {
        $this->timeLastDecayMessageShown = $timeLastDecayMessageShown;
    }

    /**
     * @return mixed
     */
    public function getTimeLastDecayMessageShown()
    {
        return $this->timeLastDecayMessageShown;
    }

    /**
     * @param mixed $timeUntilDecay
     */
    public function setTimeUntilDecay($timeUntilDecay)
    {
        $this->timeUntilDecay = $timeUntilDecay;
    }

    /**
     * @return mixed
     */
    public function getTimeUntilDecay()
    {
        return $this->timeUntilDecay;
    }

    /**
     * @param mixed $veteran
     */
    public function setVeteran($veteran)
    {
        $this->veteran = $veteran;
    }

    /**
     * @return mixed
     */
    public function getVeteran()
    {
        return $this->veteran;
    }

    /**
     * @param mixed $wins
     */
    public function setWins($wins)
    {
        $this->wins = $wins;
    }

    /**
     * @return mixed
     */
    public function getWins()
    {
        return $this->wins;
    }

    /**
     * @param mixed $miniSeries
     */
    public function setMiniSeries($miniSeries)
    {
        $this->miniSeries = $miniSeries;
    }

    /**
     * @return mixed
     */
    public function getMiniSeries()
    {
        return $this->miniSeries;
    }


} 