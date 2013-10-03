<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 13:44
 */

namespace zlokomatic\phpLoL\amf\catalog;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class ItemEffect extends LoLAMFBase{

    protected $effectId;
    protected $itemEffectId;
    protected $effect;
    protected $value;
    protected $itemId;

    /**
     * @param mixed $effect
     */
    public function setEffect($effect)
    {
        $this->effect = $effect;
    }

    /**
     * @return mixed
     */
    public function getEffect()
    {
        return $this->effect;
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
     * @param mixed $itemEffectId
     */
    public function setItemEffectId($itemEffectId)
    {
        $this->itemEffectId = $itemEffectId;
    }

    /**
     * @return mixed
     */
    public function getItemEffectId()
    {
        return $this->itemEffectId;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
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

} 