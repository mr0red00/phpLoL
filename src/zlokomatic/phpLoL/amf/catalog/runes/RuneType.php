<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 02.10.13
 * Time: 22:57
 */

namespace zlokomatic\phpLoL\amf\catalog\runes;

use zlokomatic\phpLoL\amf\LoLAMFBase;

class RuneType extends LoLAMFBase {

    protected $runeTypeId;
    protected $name;

    function __construct()
    {
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $runeTypeId
     */
    public function setRuneTypeId($runeTypeId)
    {
        $this->runeTypeId = $runeTypeId;
    }

    /**
     * @return mixed
     */
    public function getRuneTypeId()
    {
        return $this->runeTypeId;
    }

} 