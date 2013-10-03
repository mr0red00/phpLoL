<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 03.10.13
 * Time: 23:37
 */

namespace zlokomatic\phpLoL\amf\statistics;


use zlokomatic\phpLoL\amf\LoLAMFBase;

class AggregatedStatsKey extends LoLAMFBase
{

    protected $gameMode;
    protected $userId;
    protected $gameModeString;

    /**
     * @param mixed $gameMode
     */
    public function setGameMode($gameMode)
    {
        $this->gameMode = $gameMode;
    }

    /**
     * @return mixed
     */
    public function getGameMode()
    {
        return $this->gameMode;
    }

    /**
     * @param mixed $gameModeString
     */
    public function setGameModeString($gameModeString)
    {
        $this->gameModeString = $gameModeString;
    }

    /**
     * @return mixed
     */
    public function getGameModeString()
    {
        return $this->gameModeString;
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