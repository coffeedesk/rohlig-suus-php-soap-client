<?php

namespace SuusApi\Client;

class ShipmentEvents
{

    /**
     * @var Shipment $shipment
     */
    protected $shipment = null;

    /**
     * @param Shipment $shipment
     */
    public function __construct($shipment)
    {
      $this->shipment = $shipment;
    }

    /**
     * @return Shipment
     */
    public function getShipment()
    {
      return $this->shipment;
    }

    /**
     * @param Shipment $shipment
     * @return \SuusApi\Client\ShipmentEvents
     */
    public function setShipment($shipment)
    {
      $this->shipment = $shipment;
      return $this;
    }

}
