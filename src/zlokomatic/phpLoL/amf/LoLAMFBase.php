<?php

namespace zlokomatic\phpLoL\amf;


class LoLAMFBase
{
    protected $dataVersion = 0;
    protected $futureData;

    function __set($name, $value)
    {
        $method = 'set' . ucfirst($name);
        if (method_exists($this, $method)) {
            return call_user_func(array($this, $method), $value);
        } else {
            throw new \Exception(sprintf('The required method "%s" does not exist for %s', $method, get_class($this)));
        }
    }

    /**
     * @param mixed $dataVersion
     */
    public function setDataVersion($dataVersion)
    {
        $this->dataVersion = $dataVersion;
    }

    /**
     * @return mixed
     */
    public function getDataVersion()
    {
        return $this->dataVersion;
    }

    /**
     * @param mixed $futureData
     */
    public function setFutureData($futureData)
    {
        $this->futureData = $futureData;
    }

    /**
     * @return mixed
     */
    public function getFutureData()
    {
        return $this->futureData;
    }


} 