<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 14:39
 */

namespace zlokomatic\phpLoL\amf\summoner;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class SummonerLevelAndPoints extends LoLAMFBase
{
    protected $infPoints;
    protected $expPoints;
    protected $summonerLevel;
    protected $summonerId;

    /**
     * @param mixed $expPoints
     */
    public function setExpPoints($expPoints)
    {
        $this->expPoints = $expPoints;
    }

    /**
     * @return mixed
     */
    public function getExpPoints()
    {
        return $this->expPoints;
    }

    /**
     * @param mixed $infPoints
     */
    public function setInfPoints($infPoints)
    {
        $this->infPoints = $infPoints;
    }

    /**
     * @return mixed
     */
    public function getInfPoints()
    {
        return $this->infPoints;
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