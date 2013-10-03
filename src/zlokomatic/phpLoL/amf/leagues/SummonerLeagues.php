<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 23:44
 */

namespace zlokomatic\phpLoL\amf\leagues;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class SummonerLeagues extends LoLAMFBase {

    protected $summonerLeagues;

    /**
     * @param mixed $summonerLeagues
     */
    public function setSummonerLeagues($summonerLeagues)
    {
        foreach($summonerLeagues as $league){
            $this->summonerLeagues[] = $league;
        }
    }

    /**
     * @return mixed
     */
    public function getSummonerLeagues()
    {
        return $this->summonerLeagues;
    }


} 