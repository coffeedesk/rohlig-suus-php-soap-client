<?php

namespace SuusApi\Client;

class Event
{

    /**
     * @var string $code
     */
    protected $code = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $location
     */
    protected $location = null;

    /**
     * @var date $date
     */
    protected $date = null;

    /**
     * @var time $time
     */
    protected $time = null;

    /**
     * @var string $additionalInfo
     */
    protected $additionalInfo = null;

    /**
     * @param string $code
     * @param string $description
     * @param string $location
     * @param date $date
     * @param time $time
     * @param string $additionalInfo
     */
    public function __construct($code, $description, $location, $date, $time, $additionalInfo)
    {
      $this->code = $code;
      $this->description = $description;
      $this->location = $location;
      $this->date = $date;
      $this->time = $time;
      $this->additionalInfo = $additionalInfo;
    }

    /**
     * @return string
     */
    public function getCode()
    {
      return $this->code;
    }

    /**
     * @param string $code
     * @return \SuusApi\Client\Event
     */
    public function setCode($code)
    {
      $this->code = $code;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \SuusApi\Client\Event
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
      return $this->location;
    }

    /**
     * @param string $location
     * @return \SuusApi\Client\Event
     */
    public function setLocation($location)
    {
      $this->location = $location;
      return $this;
    }

    /**
     * @return date
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param date $date
     * @return \SuusApi\Client\Event
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return time
     */
    public function getTime()
    {
      return $this->time;
    }

    /**
     * @param time $time
     * @return \SuusApi\Client\Event
     */
    public function setTime($time)
    {
      $this->time = $time;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalInfo()
    {
      return $this->additionalInfo;
    }

    /**
     * @param string $additionalInfo
     * @return \SuusApi\Client\Event
     */
    public function setAdditionalInfo($additionalInfo)
    {
      $this->additionalInfo = $additionalInfo;
      return $this;
    }

}
