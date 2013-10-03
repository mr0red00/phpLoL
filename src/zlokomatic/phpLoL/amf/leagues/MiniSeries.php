<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 04.10.13
 * Time: 00:11
 */

namespace zlokomatic\phpLoL\amf\leagues;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class MiniSeries extends LoLAMFBase {

    protected $progress;
    protected $target;
    protected $losses;
    protected $timeLeftToPlayMillis;
    protected $wins;

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
     * @param mixed $progress
     */
    public function setProgress($progress)
    {
        $this->progress = $progress;
    }

    /**
     * @return mixed
     */
    public function getProgress()
    {
        return $this->progress;
    }

    /**
     * @param mixed $target
     */
    public function setTarget($target)
    {
        $this->target = $target;
    }

    /**
     * @return mixed
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param mixed $timeLeftToPlayMillis
     */
    public function setTimeLeftToPlayMillis($timeLeftToPlayMillis)
    {
        $this->timeLeftToPlayMillis = $timeLeftToPlayMillis;
    }

    /**
     * @return mixed
     */
    public function getTimeLeftToPlayMillis()
    {
        return $this->timeLeftToPlayMillis;
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