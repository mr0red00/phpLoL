<?php

namespace zlokomatic\phpLoL\amf\summoner\spellbook;

use zlokomatic\phpLoL\amf\LoLAMFBase;

class SpellBook extends LoLAMFBase
{
    protected $bookPagesJson;
    protected $bookPages = array();
    protected $dateString;
    protected $summonerId;

    function __construct()
    {

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

    /**
     * @param mixed $bookPages
     */
    public function setBookPages($bookPages)
    {
        foreach($bookPages as $page){
            $this->bookPages[] = $page;
        }

    }

    /**
     * @return mixed
     */
    public function getBookPages()
    {
        return $this->bookPages;
    }

    /**
     * @param mixed $dateString
     */
    public function setDateString($dateString)
    {
        $this->dateString = $dateString;
    }

    /**
     * @return mixed
     */
    public function getDateString()
    {
        return $this->dateString;
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