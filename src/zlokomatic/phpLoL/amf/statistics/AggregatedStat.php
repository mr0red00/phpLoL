<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 23:35
 */

namespace zlokomatic\phpLoL\amf\statistics;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class AggregatedStat extends SummaryAggStat {

    protected $championId;

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


} 