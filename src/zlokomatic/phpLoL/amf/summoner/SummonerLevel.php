<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 14:44
 */

namespace zlokomatic\phpLoL\amf\summoner;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class SummonerLevel extends LoLAMFBase
{
    protected $expTierMod;
    protected $grantRp;
    protected $expForLoss;
    protected $summonerTier;
    protected $infTierMod;
    protected $expToNextLevel;
    protected $expForWin;
    protected $summonerLevel;

    /**
     * @param mixed $expForLoss
     */
    public function setExpForLoss($expForLoss)
    {
        $this->expForLoss = $expForLoss;
    }

    /**
     * @return mixed
     */
    public function getExpForLoss()
    {
        return $this->expForLoss;
    }

    /**
     * @param mixed $expForWin
     */
    public function setExpForWin($expForWin)
    {
        $this->expForWin = $expForWin;
    }

    /**
     * @return mixed
     */
    public function getExpForWin()
    {
        return $this->expForWin;
    }

    /**
     * @param mixed $expTierMod
     */
    public function setExpTierMod($expTierMod)
    {
        $this->expTierMod = $expTierMod;
    }

    /**
     * @return mixed
     */
    public function getExpTierMod()
    {
        return $this->expTierMod;
    }

    /**
     * @param mixed $expToNextLevel
     */
    public function setExpToNextLevel($expToNextLevel)
    {
        $this->expToNextLevel = $expToNextLevel;
    }

    /**
     * @return mixed
     */
    public function getExpToNextLevel()
    {
        return $this->expToNextLevel;
    }

    /**
     * @param mixed $grantRp
     */
    public function setGrantRp($grantRp)
    {
        $this->grantRp = $grantRp;
    }

    /**
     * @return mixed
     */
    public function getGrantRp()
    {
        return $this->grantRp;
    }

    /**
     * @param mixed $infTierMod
     */
    public function setInfTierMod($infTierMod)
    {
        $this->infTierMod = $infTierMod;
    }

    /**
     * @return mixed
     */
    public function getInfTierMod()
    {
        return $this->infTierMod;
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

    /**
     * @param mixed $summonerTier
     */
    public function setSummonerTier($summonerTier)
    {
        $this->summonerTier = $summonerTier;
    }

    /**
     * @return mixed
     */
    public function getSummonerTier()
    {
        return $this->summonerTier;
    }


} 