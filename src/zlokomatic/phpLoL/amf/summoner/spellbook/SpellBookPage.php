<?php

namespace zlokomatic\phpLoL\amf\summoner\spellbook;

use zlokomatic\phpLoL\amf\LoLAMFBase;

class SpellBookPage extends LoLAMFBase
{

    protected $pageId;
    protected $name;
    protected $current;
    protected $slotEntries = array();
    protected $createDate;
    protected $bookPagesJson;

    function __construct()
    {

    }

    /**
     * @param mixed $pageId
     */
    public function setPageId($pageId)
    {
        $this->pageId = $pageId;
    }

    /**
     * @return mixed
     */
    public function getPageId()
    {
        return $this->pageId;
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
     * @param mixed $current
     */
    public function setCurrent($current)
    {
        $this->current = $current;
    }

    /**
     * @return mixed
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * @param mixed $slotEntries
     */
    public function setSlotEntries($slotEntries)
    {
        foreach($slotEntries as $entry){
            $this->slotEntries[] = $entry;
        }
    }

    /**
     * @return mixed
     */
    public function getSlotEntries()
    {
        return $this->slotEntries;
    }

    /**
     * @param mixed $createDate
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;
    }

    /**
     * @return mixed
     */
    public function getCreateDate()
    {
        return $this->createDate;
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

    /**
     * @param mixed $bookPagesJson
     */
    public function setBookPagesJson($bookPagesJson)
    {
        $this->bookPagesJson = $bookPagesJson;
    }

    /**
     * @return mixed
     */
    public function getBookPagesJson()
    {
        return $this->bookPagesJson;
    }


} 