<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 14:04
 */

namespace zlokomatic\phpLoL\amf\summoner;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class SummonerDefaultSpells extends LoLAMFBase {

    protected $summonerDefaultSpellsJson;
    protected $summonerDefaultSpellMap;
    protected $summonerId;

    /**
     * @param mixed $summonerDefaultSpellMap
     */
    public function setSummonerDefaultSpellMap($summonerDefaultSpellMap)
    {
        $this->summonerDefaultSpellMap = (array) $summonerDefaultSpellMap;
    }

    /**
     * @return mixed
     */
    public function getSummonerDefaultSpellMap()
    {
        return $this->summonerDefaultSpellMap;
    }

    /**
     * @param mixed $summonerDefaultSpellsJson
     */
    public function setSummonerDefaultSpellsJson($summonerDefaultSpellsJson)
    {
        $this->summonerDefaultSpellsJson = (array) $summonerDefaultSpellsJson;
    }

    /**
     * @return mixed
     */
    public function getSummonerDefaultSpellsJson()
    {
        return $this->summonerDefaultSpellsJson;
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


} 