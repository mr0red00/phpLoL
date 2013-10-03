<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 13:45
 */

namespace zlokomatic\phpLoL\amf\catalog;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class Effect extends LoLAMFBase {

    protected $effectId;
    protected $gameCode;
    protected $name;
    protected $categoryId;
    protected $runeType;

    /**
     * @param mixed $categoryId
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * @param mixed $effectId
     */
    public function setEffectId($effectId)
    {
        $this->effectId = $effectId;
    }

    /**
     * @return mixed
     */
    public function getEffectId()
    {
        return $this->effectId;
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


} 