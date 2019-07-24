<?php

namespace SuusApi\Client;

class Shipment
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
     * @param string $shipmentNo
     * @param string $reference
     */
    public function __construct($shipmentNo, $reference)
    {
      $this->shipmentNo = $shipmentNo;
      $this->reference = $reference;
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
     * @return \SuusApi\Client\Shipment
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
     * @return \SuusApi\Client\Shipment
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

}
