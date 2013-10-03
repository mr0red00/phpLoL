<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 15:12
 */

namespace zlokomatic\phpLoL\amf\statistics;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class PlayerGameStats extends LoLAMFBase {

    protected $skinName;
    protected $ranked;
    protected $skinIndex;
    protected $fellowPlayers;
    protected $gameType;
    protected $experienceEarned;
    protected $rawStatsJson;
    protected $eligibleFirstWinOfDay;
    protected $difficulty;
    protected $gameMapId;
    protected $leaver;
    protected $spell1;
    protected $gameTypeEnum;
    protected $teamId;
    protected $summonerId;
    protected $statistics;
    protected $spell2;
    protected $afk;
    protected $id;
    protected $boostXpEarned;
    protected $boostIpEarned;
    protected $level;
    protected $invalid;
    protected $userId;
    protected $createDate;
    protected $userServerPing;
    protected $adjustedRating;
    protected $premadeSize;
    protected $gameId;
    protected $timeInQueue;
    protected $ipEarned;
    protected $eloChange;
    protected $gameMode;
    protected $difficultyString;
    protected $KCoefficient;
    protected $teamRating;
    protected $subType;
    protected $queueType;
    protected $premadeTeam;
    protected $predictedWinPct;
    protected $rating;
    protected $championId;

    /**
     * @param mixed $fellowPlayers
     */
    public function setFellowPlayers($fellowPlayers)
    {
        foreach($fellowPlayers as $player){
            $this->fellowPlayers[] = $player;
        }
    }

    /**
     * @return mixed
     */
    public function getFellowPlayers()
    {
        return $this->fellowPlayers;
    }

    /**
     * @param mixed $ranked
     */
    public function setRanked($ranked)
    {
        $this->ranked = $ranked;
    }

    /**
     * @return mixed
     */
    public function getRanked()
    {
        return $this->ranked;
    }

    /**
     * @param mixed $skinIndex
     */
    public function setSkinIndex($skinIndex)
    {
        $this->skinIndex = $skinIndex;
    }

    /**
     * @return mixed
     */
    public function getSkinIndex()
    {
        return $this->skinIndex;
    }

    /**
     * @param mixed $skinName
     */
    public function setSkinName($skinName)
    {
        $this->skinName = $skinName;
    }

    /**
     * @return mixed
     */
    public function getSkinName()
    {
        return $this->skinName;
    }

    /**
     * @param mixed $gameType
     */
    public function setGameType($gameType)
    {
        $this->gameType = $gameType;
    }

    /**
     * @return mixed
     */
    public function getGameType()
    {
        return $this->gameType;
    }

    /**
     * @param mixed $experienceEarned
     */
    public function setExperienceEarned($experienceEarned)
    {
        $this->experienceEarned = $experienceEarned;
    }

    /**
     * @return mixed
     */
    public function getExperienceEarned()
    {
        return $this->experienceEarned;
    }

    /**
     * @param mixed $rawStatsJson
     */
    public function setRawStatsJson($rawStatsJson)
    {
        $this->rawStatsJson = $rawStatsJson;
    }

    /**
     * @return mixed
     */
    public function getRawStatsJson()
    {
        return $this->rawStatsJson;
    }

    /**
     * @param mixed $eligibleFirstWinOfDay
     */
    public function setEligibleFirstWinOfDay($eligibleFirstWinOfDay)
    {
        $this->eligibleFirstWinOfDay = $eligibleFirstWinOfDay;
    }

    /**
     * @return mixed
     */
    public function getEligibleFirstWinOfDay()
    {
        return $this->eligibleFirstWinOfDay;
    }

    /**
     * @param mixed $difficulty
     */
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;
    }

    /**
     * @return mixed
     */
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * @param mixed $gameMapId
     */
    public function setGameMapId($gameMapId)
    {
        $this->gameMapId = $gameMapId;
    }

    /**
     * @return mixed
     */
    public function getGameMapId()
    {
        return $this->gameMapId;
    }

    /**
     * @param mixed $gameTypeEnum
     */
    public function setGameTypeEnum($gameTypeEnum)
    {
        $this->gameTypeEnum = $gameTypeEnum;
    }

    /**
     * @return mixed
     */
    public function getGameTypeEnum()
    {
        return $this->gameTypeEnum;
    }

    /**
     * @param mixed $leaver
     */
    public function setLeaver($leaver)
    {
        $this->leaver = $leaver;
    }

    /**
     * @return mixed
     */
    public function getLeaver()
    {
        return $this->leaver;
    }

    /**
     * @param mixed $spell1
     */
    public function setSpell1($spell1)
    {
        $this->spell1 = $spell1;
    }

    /**
     * @return mixed
     */
    public function getSpell1()
    {
        return $this->spell1;
    }

    /**
     * @param mixed $statistics
     */
    public function setStatistics($statistics)
    {
       foreach($statistics as $stat){
           $this->statistics[] = $stat;
       }
    }

    /**
     * @return mixed
     */
    public function getStatistics()
    {
        return $this->statistics;
    }

    /**
     * @param mixed $summonerId
     */
    public function setSummonerId($summonerId)
    {
        $this->summonerId = $summonerId;
    }

    /**
     * @return mixed
     */
    public function getSummonerId()
    {
        return $this->summonerId;
    }

    /**
     * @param mixed $teamId
     */
    public function setTeamId($teamId)
    {
        $this->teamId = $teamId;
    }

    /**
     * @return mixed
     */
    public function getTeamId()
    {
        return $this->teamId;
    }

    /**
     * @param mixed $KCoefficient
     */
    public function setKCoefficient($KCoefficient)
    {
        $this->KCoefficient = $KCoefficient;
    }

    /**
     * @return mixed
     */
    public function getKCoefficient()
    {
        return $this->KCoefficient;
    }

    /**
     * @param mixed $adjustedRating
     */
    public function setAdjustedRating($adjustedRating)
    {
        $this->adjustedRating = $adjustedRating;
    }

    /**
     * @return mixed
     */
    public function getAdjustedRating()
    {
        return $this->adjustedRating;
    }

    /**
     * @param mixed $afk
     */
    public function setAfk($afk)
    {
        $this->afk = $afk;
    }

    /**
     * @return mixed
     */
    public function getAfk()
    {
        return $this->afk;
    }

    /**
     * @param mixed $boostXpEarned
     */
    public function setBoostXpEarned($boostXpEarned)
    {
        $this->boostXpEarned = $boostXpEarned;
    }

    /**
     * @return mixed
     */
    public function getBoostXpEarned()
    {
        return $this->boostXpEarned;
    }

    /**
     * @param mixed $championId
     */
    public function setChampionId($championId)
    {
        $this->championId = $championId;
    }

    /**
     * @return mixed
     */
    public function getChampionId()
    {
        return $this->championId;
    }

    /**
     * @param mixed $createDate
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }

    /**
     * @return mixed
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * @param mixed $difficultyString
     */
    public function setDifficultyString($difficultyString)
    {
        $this->difficultyString = $difficultyString;
    }

    /**
     * @return mixed
     */
    public function getDifficultyString()
    {
        return $this->difficultyString;
    }

    /**
     * @param mixed $eloChange
     */
    public function setEloChange($eloChange)
    {
        $this->eloChange = $eloChange;
    }

    /**
     * @return mixed
     */
    public function getEloChange()
    {
        return $this->eloChange;
    }

    /**
     * @param mixed $gameId
     */
    public function setGameId($gameId)
    {
        $this->gameId = $gameId;
    }

    /**
     * @return mixed
     */
    public function getGameId()
    {
        return $this->gameId;
    }

    /**
     * @param mixed $gameMode
     */
    public function setGameMode($gameMode)
    {
        $this->gameMode = $gameMode;
    }

    /**
     * @return mixed
     */
    public function getGameMode()
    {
        return $this->gameMode;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $invalid
     */
    public function setInvalid($invalid)
    {
        $this->invalid = $invalid;
    }

    /**
     * @return mixed
     */
    public function getInvalid()
    {
        return $this->invalid;
    }

    /**
     * @param mixed $ipEarned
     */
    public function setIpEarned($ipEarned)
    {
        $this->ipEarned = $ipEarned;
    }

    /**
     * @return mixed
     */
    public function getIpEarned()
    {
        return $this->ipEarned;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $predictedWinPct
     */
    public function setPredictedWinPct($predictedWinPct)
    {
        $this->predictedWinPct = $predictedWinPct;
    }

    /**
     * @return mixed
     */
    public function getPredictedWinPct()
    {
        return $this->predictedWinPct;
    }

    /**
     * @param mixed $premadeSize
     */
    public function setPremadeSize($premadeSize)
    {
        $this->premadeSize = $premadeSize;
    }

    /**
     * @return mixed
     */
    public function getPremadeSize()
    {
        return $this->premadeSize;
    }

    /**
     * @param mixed $premadeTeam
     */
    public function setPremadeTeam($premadeTeam)
    {
        $this->premadeTeam = $premadeTeam;
    }

    /**
     * @return mixed
     */
    public function getPremadeTeam()
    {
        return $this->premadeTeam;
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
     * @param mixed $spell2
     */
    public function setSpell2($spell2)
    {
        $this->spell2 = $spell2;
    }

    /**
     * @return mixed
     */
    public function getSpell2()
    {
        return $this->spell2;
    }

    /**
     * @param mixed $subType
     */
    public function setSubType($subType)
    {
        $this->subType = $subType;
    }

    /**
     * @return mixed
     */
    public function getSubType()
    {
        return $this->subType;
    }

    /**
     * @param mixed $teamRating
     */
    public function setTeamRating($teamRating)
    {
        $this->teamRating = $teamRating;
    }

    /**
     * @return mixed
     */
    public function getTeamRating()
    {
        return $this->teamRating;
    }

    /**
     * @param mixed $timeInQueue
     */
    public function setTimeInQueue($timeInQueue)
    {
        $this->timeInQueue = $timeInQueue;
    }

    /**
     * @return mixed
     */
    public function getTimeInQueue()
    {
        return $this->timeInQueue;
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
     * @param mixed $userServerPing
     */
    public function setUserServerPing($userServerPing)
    {
        $this->userServerPing = $userServerPing;
    }

    /**
     * @return mixed
     */
    public function getUserServerPing()
    {
        return $this->userServerPing;
    }

    /**
     * @param mixed $boostIpEarned
     */
    public function setBoostIpEarned($boostIpEarned)
    {
        $this->boostIpEarned = $boostIpEarned;
    }

    /**
     * @return mixed
     */
    public function getBoostIpEarned()
    {
        return $this->boostIpEarned;
    }


} 