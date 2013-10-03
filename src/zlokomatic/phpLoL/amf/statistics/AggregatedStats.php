<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 23:31
 */

namespace zlokomatic\phpLoL\amf\statistics;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class AggregatedStats extends LoLAMFBase {

    protected $lifetimeStatistics;
    protected $modifyDate;
    protected $key;
    protected $aggregatedStatsJson;

    /**
     * @param mixed $aggregatedStatsJson
     */
    public function setAggregatedStatsJson($aggregatedStatsJson)
    {
        $this->aggregatedStatsJson = $aggregatedStatsJson;
    }

    /**
     * @return mixed
     */
    public function getAggregatedStatsJson()
    {
        return $this->aggregatedStatsJson;
    }

    /**
     * @param mixed $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @return mixed
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param mixed $lifetimeStatistics
     */
    public function setLifetimeStatistics($lifetimeStatistics)
    {
        foreach($lifetimeStatistics as $stat){
            $this->lifetimeStatistics[] = $stat;
        }
    }

    /**
     * @return mixed
     */
    public function getLifetimeStatistics()
    {
        return $this->lifetimeStatistics;
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


} 