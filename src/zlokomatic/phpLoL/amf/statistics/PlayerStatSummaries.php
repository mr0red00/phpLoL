<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 22:51
 */

namespace zlokomatic\phpLoL\amf\statistics;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class PlayerStatSummaries extends LoLAMFBase {

    protected $playerStatSummarySet = array();
    protected $userId;

    /**
     * @param mixed $playerStatSummarySet
     */
    public function setPlayerStatSummarySet($playerStatSummarySet)
    {
        foreach($playerStatSummarySet as $set){
            $this->playerStatSummarySet[] = $set;
        }
    }

    /**
     * @return mixed
     */
    public function getPlayerStatSummarySet()
    {
        return $this->playerStatSummarySet;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }


} 