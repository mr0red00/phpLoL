<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 14:14
 */

namespace zlokomatic\phpLoL\amf\summoner;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class SummonerTalentsAndPoints extends LoLAMFBase {

    protected $talentPoints;
    protected $modifyDate;
    protected $createDate;
    protected $summonerId;

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
     * @param mixed $talentPoints
     */
    public function setTalentPoints($talentPoints)
    {
        $this->talentPoints = $talentPoints;
    }

    /**
     * @return mixed
     */
    public function getTalentPoints()
    {
        return $this->talentPoints;
    }


} 