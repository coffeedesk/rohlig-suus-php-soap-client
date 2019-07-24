<?php

namespace SuusApi\Client;

class ShipmentsResult
{

    /**
     * @var string $shipmentNo
     */
    protected $shipmentNo = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var ReturnInfo $error
     */
    protected $error = null;

    /**
     * @var ArrayOfEvents $events
     */
    protected $events = null;

    /**
     * @param string $shipmentNo
     * @param string $reference
     * @param ReturnInfo $error
     * @param ArrayOfEvents $events
     */
    public function __construct($shipmentNo, $reference, $error, $events)
    {
      $this->shipmentNo = $shipmentNo;
      $this->reference = $reference;
      $this->error = $error;
      $this->events = $events;
    }

    /**
     * @return string
     */
    public function getShipmentNo()
    {
      return $this->shipmentNo;
    }

    /**
     * @param string $shipmentNo
     * @return \SuusApi\Client\ShipmentsResult
     */
    public function setShipmentNo($shipmentNo)
    {
      $this->shipmentNo = $shipmentNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
      return $this->reference;
    }

    /**
     * @param string $reference
     * @return \SuusApi\Client\ShipmentsResult
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return ReturnInfo
     */
    public function getError()
    {
      return $this->error;
    }

    /**
     * @param ReturnInfo $error
     * @return \SuusApi\Client\ShipmentsResult
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

    /**
     * @return ArrayOfEvents
     */
    public function getEvents()
    {
      return $this->events;
    }

    /**
     * @param ArrayOfEvents $events
     * @return \SuusApi\Client\ShipmentsResult
     */
    public function setEvents($events)
    {
      $this->events = $events;
      return $this;
    }

}
