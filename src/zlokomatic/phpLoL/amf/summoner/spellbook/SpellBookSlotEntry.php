<?php

namespace zlokomatic\phpLoL\amf\summoner\spellbook;

use zlokomatic\phpLoL\amf\LoLAMFBase;

class SpellBookSlotEntry extends LoLAMFBase
{

    protected $runeId;
    protected $runeSlotId;
    protected $runeSlot;
    protected $rune;

    function __construct()
    {

    }

    /**
     * @param mixed $runeId
     */
    public function setRuneId($runeId)
    {
        $this->runeId = $runeId;
    }

    /**
     * @return mixed
     */
    public function getRuneId()
    {
        return $this->runeId;
    }

    /**
     * @param mixed $runeSlotId
     */
    public function setRuneSlotId($runeSlotId)
    {
        $this->runeSlotId = $runeSlotId;
    }

    /**
     * @return mixed
     */
    public function getRuneSlotId()
    {
        return $this->runeSlotId;
    }

    /**
     * @param mixed $runeSlot
     */
    public function setRuneSlot($runeSlot)
    {
        $this->runeSlot = $runeSlot;
    }

    /**
     * @return mixed
     */
    public function getRuneSlot()
    {
        return $this->runeSlot;
    }

    /**
     * @param mixed $rune
     */
    public function setRune($rune)
    {
        $this->rune = $rune;
    }

    /**
     * @return mixed
     */
    public function getRune()
    {
        return $this->rune;
    }

} 