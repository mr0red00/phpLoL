<?php

namespace zlokomatic\phpLoL\amf\summoner;

use zlokomatic\phpLoL\amf\LoLAMFBase;

class GameModeSpells extends LoLAMFBase
{

    protected $spell1Id;
    protected $spell2Id;


    function __construct()
    {

    }

    /**
     * @param mixed $spell1Id
     */
    public function setSpell1Id($spell1Id)
    {
        $this->spell1Id = $spell1Id;
    }

    /**
     * @return mixed
     */
    public function getSpell1Id()
    {
        return $this->spell1Id;
    }

    /**
     * @param mixed $spell2Id
     */
    public function setSpell2Id($spell2Id)
    {
        $this->spell2Id = $spell2Id;
    }

    /**
     * @return mixed
     */
    public function getSpell2Id()
    {
        return $this->spell2Id;
    }

} 