<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 14:27
 */

namespace zlokomatic\phpLoL\amf\summoner;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class BasePublicSummoner extends LoLAMFBase {

    protected $seasonTwoTier;
    protected $internalName;
    protected $previousSeasonHighestTier;
    protected $accId;
    protected $acctId;
    protected $name;
    protected $sumId;
    protected $profileIconId;

    /**
     * @param mixed $accId
     */
    public function setAccId($accId)
    {
        $this->accId = $accId;
    }

    /**
     * @return mixed
     */
    public function getAccId()
    {
        return $this->accId;
    }

    /**
     * @param mixed $accId
     */
    public function setAcctId($accId)
    {
        $this->accId = $accId;
    }

    /**
     * @return mixed
     */
    public function getAcctId()
    {
        return $this->accId;
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
     * @param mixed $previousSeasonHighestTier
     */
    public function setPreviousSeasonHighestTier($previousSeasonHighestTier)
    {
        $this->previousSeasonHighestTier = $previousSeasonHighestTier;
    }

    /**
     * @return mixed
     */
    public function getPreviousSeasonHighestTier()
    {
        return $this->previousSeasonHighestTier;
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
     * @param mixed $seasonTwoTier
     */
    public function setSeasonTwoTier($seasonTwoTier)
    {
        $this->seasonTwoTier = $seasonTwoTier;
    }

    /**
     * @return mixed
     */
    public function getSeasonTwoTier()
    {
        return $this->seasonTwoTier;
    }

    /**
     * @param mixed $sumId
     */
    public function setSumId($sumId)
    {
        $this->sumId = $sumId;
    }

    /**
     * @return mixed
     */
    public function getSumId()
    {
        return $this->sumId;
    }


} 