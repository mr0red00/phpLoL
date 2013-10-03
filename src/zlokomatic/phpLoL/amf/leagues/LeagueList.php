<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 23:45
 */

namespace zlokomatic\phpLoL\amf\leagues;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class LeagueList extends LoLAMFBase {

    protected $queue;
    protected $name;
    protected $tier;
    protected $requestorsRank;
    protected $entries;
    protected $requestorsName;

    /**
     * @param mixed $entries
     */
    public function setEntries($entries)
    {
        foreach($entries as $entry){
            $this->entries[] = $entry;
        }
    }

    /**
     * @return mixed
     */
    public function getEntries()
    {
        return $this->entries;
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
     * @param mixed $queue
     */
    public function setQueue($queue)
    {
        $this->queue = $queue;
    }

    /**
     * @return mixed
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * @param mixed $requestorsName
     */
    public function setRequestorsName($requestorsName)
    {
        $this->requestorsName = $requestorsName;
    }

    /**
     * @return mixed
     */
    public function getRequestorsName()
    {
        return $this->requestorsName;
    }

    /**
     * @param mixed $requestorsRank
     */
    public function setRequestorsRank($requestorsRank)
    {
        $this->requestorsRank = $requestorsRank;
    }

    /**
     * @return mixed
     */
    public function getRequestorsRank()
    {
        return $this->requestorsRank;
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


} 