<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 23:11
 */

namespace zlokomatic\phpLoL\amf\statistics;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class LeaverPenaltyStats extends LoLAMFBase {

    protected $lastLevelIncrease;
    protected $level;
    protected $lastDecay;
    protected $userInformed;
    protected $points;

    /**
     * @param mixed $lastDecay
     */
    public function setLastDecay($lastDecay)
    {
        $this->lastDecay = $lastDecay;
    }

    /**
     * @return mixed
     */
    public function getLastDecay()
    {
        return $this->lastDecay;
    }

    /**
     * @param mixed $lastLevelIncrease
     */
    public function setLastLevelIncrease($lastLevelIncrease)
    {
        $this->lastLevelIncrease = $lastLevelIncrease;
    }

    /**
     * @return mixed
     */
    public function getLastLevelIncrease()
    {
        return $this->lastLevelIncrease;
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
     * @param mixed $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

    /**
     * @return mixed
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param mixed $userInformed
     */
    public function setUserInformed($userInformed)
    {
        $this->userInformed = $userInformed;
    }

    /**
     * @return mixed
     */
    public function getUserInformed()
    {
        return $this->userInformed;
    }

} 