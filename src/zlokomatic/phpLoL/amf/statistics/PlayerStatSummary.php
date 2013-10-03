<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 22:52
 */

namespace zlokomatic\phpLoL\amf\statistics;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class PlayerStatSummary extends LoLAMFBase {

    protected $maxRating;
    protected $playerStatSummaryTypeString;
    protected $aggregatedStats;
    protected $modifyDate;
    protected $leaves;
    protected $playerStatSummaryType;
    protected $userId;
    protected $losses;
    protected $rating;
    protected $aggregatedStatsJson;
    protected $wins;

    /**
     * @param mixed $aggregatedStats
     */
    public function setAggregatedStats($aggregatedStats)
    {
        $this->aggregatedStats = $aggregatedStats;
    }

    /**
     * @return mixed
     */
    public function getAggregatedStats()
    {
        return $this->aggregatedStats;
    }

    /**
     * @param mixed $aggregatedStatsJson
     */
    public function setAggregatedStatsJson($aggregatedStatsJson)
    {
        $this->aggregatedStatsJson = $aggregatedStatsJson;
    }

    /**
     * @return mixed
     */
    public function getAggregatedStatsJson()
    {
        return $this->aggregatedStatsJson;
    }

    /**
     * @param mixed $leaves
     */
    public function setLeaves($leaves)
    {
        $this->leaves = $leaves;
    }

    /**
     * @return mixed
     */
    public function getLeaves()
    {
        return $this->leaves;
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
     * @param mixed $maxRating
     */
    public function setMaxRating($maxRating)
    {
        $this->maxRating = $maxRating;
    }

    /**
     * @return mixed
     */
    public function getMaxRating()
    {
        return $this->maxRating;
    }

    /**
     * @param mixed $modifyDate
     */
    public function setModifyDate($modifyDate)
    {
        $this->modifyDate = $modifyDate;
    }

    /**
     * @return mixed
     */
    public function getModifyDate()
    {
        return $this->modifyDate;
    }

    /**
     * @param mixed $playerStatSummaryType
     */
    public function setPlayerStatSummaryType($playerStatSummaryType)
    {
        $this->playerStatSummaryType = $playerStatSummaryType;
    }

    /**
     * @return mixed
     */
    public function getPlayerStatSummaryType()
    {
        return $this->playerStatSummaryType;
    }

    /**
     * @param mixed $playerStatSummaryTypeString
     */
    public function setPlayerStatSummaryTypeString($playerStatSummaryTypeString)
    {
        $this->playerStatSummaryTypeString = $playerStatSummaryTypeString;
    }

    /**
     * @return mixed
     */
    public function getPlayerStatSummaryTypeString()
    {
        return $this->playerStatSummaryTypeString;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
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


} 