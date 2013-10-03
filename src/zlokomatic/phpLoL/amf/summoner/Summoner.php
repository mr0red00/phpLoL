<?php

namespace zlokomatic\phpLoL\amf\summoner;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class Summoner extends LoLAMFBase
{

    protected $internalName;
    protected $dataVersion;
    protected $acctId;
    protected $name;
    protected $profileIconId;
    protected $revisionDate;
    protected $revisionId;
    protected $summonerLevel;
    protected $summonerId;
    protected $futureData;


    function __construct()
    {

    }

    /**
     * @param mixed $acctId
     */
    public function setAcctId($acctId)
    {
        $this->acctId = $acctId;
    }

    /**
     * @return mixed
     */
    public function getAcctId()
    {
        return $this->acctId;
    }

    /**
     * @param mixed $dataVersion
     */
    public function setDataVersion($dataVersion)
    {
        $this->dataVersion = $dataVersion;
    }

    /**
     * @return mixed
     */
    public function getDataVersion()
    {
        return $this->dataVersion;
    }

    /**
     * @param mixed $futureData
     */
    public function setFutureData($futureData)
    {
        $this->futureData = $futureData;
    }

    /**
     * @return mixed
     */
    public function getFutureData()
    {
        return $this->futureData;
    }

    /**
     * @param mixed $internalName
     */
    public function setInternalName($internalName)
    {
        $this->internalName = $internalName;
    }

    /**
     * @return mixed
     */
    public function getInternalName()
    {
        return $this->internalName;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $profileIconId
     */
    public function setProfileIconId($profileIconId)
    {
        $this->profileIconId = $profileIconId;
    }

    /**
     * @return mixed
     */
    public function getProfileIconId()
    {
        return $this->profileIconId;
    }

    /**
     * @param mixed $revisionDate
     */
    public function setRevisionDate($revisionDate)
    {
        $this->revisionDate = $revisionDate;
    }

    /**
     * @return mixed
     */
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }

    /**
     * @param mixed $revisionId
     */
    public function setRevisionId($revisionId)
    {
        $this->revisionId = $revisionId;
    }

    /**
     * @return mixed
     */
    public function getRevisionId()
    {
        return $this->revisionId;
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
     * @param mixed $summonerLevel
     */
    public function setSummonerLevel($summonerLevel)
    {
        $this->summonerLevel = $summonerLevel;
    }

    /**
     * @return mixed
     */
    public function getSummonerLevel()
    {
        return $this->summonerLevel;
    }


} 