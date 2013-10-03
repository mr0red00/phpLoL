<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 23:07
 */

namespace zlokomatic\phpLoL\amf\statistics;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class SummaryAggStats extends LoLAMFBase {

    protected $statsJson;
    protected $stats;

    /**
     * @param mixed $stats
     */
    public function setStats($stats)
    {
        foreach($stats as $stat){
            $this->stats[] = $stat;
        }
    }

    /**
     * @return mixed
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @param mixed $statsJson
     */
    public function setStatsJson($statsJson)
    {
        $this->statsJson = $statsJson;
    }

    /**
     * @return mixed
     */
    public function getStatsJson()
    {
        return $this->statsJson;
    }


} 