<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 02.10.13
 * Time: 23:00
 */

namespace zlokomatic\phpLoL\amf\catalog\runes;

use zlokomatic\phpLoL\amf\LoLAMFBase;

class Rune extends LoLAMFBase {
    protected $imagePath;
    protected $toolTip;
    protected $tier;
    protected $itemId;
    protected $runeType;
    protected $duration;
    protected $gameCode;
    protected $itemEffects;
    protected $baseType;
    protected $description;
    protected $name;
    protected $uses;

    function __construct()
    {
    }

    /**
     * @param mixed $baseType
     */
    public function setBaseType($baseType)
    {
        $this->baseType = $baseType;
    }

    /**
     * @return mixed
     */
    public function getBaseType()
    {
        return $this->baseType;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @return mixed
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param mixed $gameCode
     */
    public function setGameCode($gameCode)
    {
        $this->gameCode = $gameCode;
    }

    /**
     * @return mixed
     */
    public function getGameCode()
    {
        return $this->gameCode;
    }

    /**
     * @param mixed $imagePath
     */
    public function setImagePath($imagePath)
    {
        $this->imagePath = $imagePath;
    }

    /**
     * @return mixed
     */
    public function getImagePath()
    {
        return $this->imagePath;
    }

    /**
     * @param mixed $itemEffects
     */
    public function setItemEffects($itemEffects)
    {
        foreach($itemEffects as $effect){
            $this->itemEffects[] = $effect;
        }
    }

    /**
     * @return mixed
     */
    public function getItemEffects()
    {
        return $this->itemEffects;
    }

    /**
     * @param mixed $itemId
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;
    }

    /**
     * @return mixed
     */
    public function getItemId()
    {
        return $this->itemId;
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

    /**
     * @param mixed $tier
     */
    public function setTier($tier)
    {
        $this->tier = $tier;
    }

    /**
     * @return mixed
     */
    public function getTier()
    {
        return $this->tier;
    }

    /**
     * @param mixed $toolTip
     */
    public function setToolTip($toolTip)
    {
        $this->toolTip = $toolTip;
    }

    /**
     * @return mixed
     */
    public function getToolTip()
    {
        return $this->toolTip;
    }

    /**
     * @param mixed $uses
     */
    public function setUses($uses)
    {
        $this->uses = $uses;
    }

    /**
     * @return mixed
     */
    public function getUses()
    {
        return $this->uses;
    }


} 