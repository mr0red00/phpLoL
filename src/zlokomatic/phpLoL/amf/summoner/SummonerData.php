<?php

namespace zlokomatic\phpLoL\amf\summoner;


use zlokomatic\phpLoL\amf\LoLAMFBase;
use zlokomatic\phpLoL\amf\summoner\spellbook\SpellBook;

class SummonerData extends LoLAMFBase
{

    protected $spellBook;
    protected $summonerDefaultSpells = array();
    protected $summonerTalentsAndPoints;
    protected $summoner;
    protected $summonerLevelAndPoints;
    protected $summonerLevel;

    function __construct()
    {
        $this->spellBook = new SpellBook();
    }

    /**
     * @param mixed $spellBook
     */
    public function setSpellBook($spellBook)
    {
         $this->spellBook = $spellBook;
    }

    /**
     * @return mixed
     */
    public function getSpellBook()
    {
        return $this->spellBook;
    }

    /**
     * @param mixed $summoner
     */
    public function setSummoner($summoner)
    {
        $this->summoner = $summoner;
    }

    /**
     * @return mixed
     */
    public function getSummoner()
    {
        return $this->summoner;
    }

    /**
     * @param array $summonerDefaultSpells
     */
    public function setSummonerDefaultSpells($summonerDefaultSpells)
    {
        $this->summonerDefaultSpells = $summonerDefaultSpells;
    }

    /**
     * @return array
     */
    public function getSummonerDefaultSpells()
    {
        return $this->summonerDefaultSpells;
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
     * @param mixed $summonerLevelAndPoints
     */
    public function setSummonerLevelAndPoints($summonerLevelAndPoints)
    {
        $this->summonerLevelAndPoints = $summonerLevelAndPoints;
    }

    /**
     * @return mixed
     */
    public function getSummonerLevelAndPoints()
    {
        return $this->summonerLevelAndPoints;
    }

    /**
     * @param mixed $summonerTalentsAndPoints
     */
    public function setSummonerTalentsAndPoints($summonerTalentsAndPoints)
    {
        $this->summonerTalentsAndPoints = $summonerTalentsAndPoints;
    }

    /**
     * @return mixed
     */
    public function getSummonerTalentsAndPoints()
    {
        return $this->summonerTalentsAndPoints;
    }


}