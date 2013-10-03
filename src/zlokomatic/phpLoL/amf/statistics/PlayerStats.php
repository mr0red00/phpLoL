<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 23:13
 */

namespace zlokomatic\phpLoL\amf\statistics;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class PlayerStats extends LoLAMFBase {

    protected $timeTrackedStats;
    protected $promoGamesPlayed;
    protected $promoGamesPlayedLastUpdated;

    /**
     * @param mixed $promoGamesPlayed
     */
    public function setPromoGamesPlayed($promoGamesPlayed)
    {
        $this->promoGamesPlayed = $promoGamesPlayed;
    }

    /**
     * @return mixed
     */
    public function getPromoGamesPlayed()
    {
        return $this->promoGamesPlayed;
    }

    /**
     * @param mixed $promoGamesPlayedLastUpdated
     */
    public function setPromoGamesPlayedLastUpdated($promoGamesPlayedLastUpdated)
    {
        $this->promoGamesPlayedLastUpdated = $promoGamesPlayedLastUpdated;
    }

    /**
     * @return mixed
     */
    public function getPromoGamesPlayedLastUpdated()
    {
        return $this->promoGamesPlayedLastUpdated;
    }

    /**
     * @param mixed $timeTrackedStats
     */
    public function setTimeTrackedStats($timeTrackedStats)
    {
        foreach($timeTrackedStats as $stats){
            $this->timeTrackedStats[] = $stats;
        }
    }

    /**
     * @return mixed
     */
    public function getTimeTrackedStats()
    {
        return $this->timeTrackedStats;
    }


} 