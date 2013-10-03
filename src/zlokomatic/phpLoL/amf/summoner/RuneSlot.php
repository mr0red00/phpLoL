<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 02.10.13
 * Time: 22:52
 */

namespace zlokomatic\phpLoL\amf\summoner;

use zlokomatic\phpLoL\amf\LoLAMFBase;

class RuneSlot extends LoLAMFBase {

    protected $id;
    protected $minLevel;
    protected $runeType;


    function __construct(){

    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $minLevel
     */
    public function setMinLevel($minLevel)
    {
        $this->minLevel = $minLevel;
    }

    /**
     * @return mixed
     */
    public function getMinLevel()
    {
        return $this->minLevel;
    }

    /**
     * @param mixed $runeType
     */
    public function setRuneType($runeType)
    {
        $this->runeType = $runeType;
    }

    /**
     * @return mixed
     */
    public function getRuneType()
    {
        return $this->runeType;
    }


} 