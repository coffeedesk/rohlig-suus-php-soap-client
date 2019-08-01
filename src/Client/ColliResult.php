<?php

namespace SuusApi\Client;

class ColliResult
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
     * @var Colli[] $colliNo
     */
    protected $colliNo = null;

    /**
     * @param string $shipmentNo
     * @param string $reference
     * @param ReturnInfo $error
     * @param Colli[] $colliNo
     */
    public function __construct($shipmentNo, $reference, $error, $colliNo)
    {
      $this->shipmentNo = $shipmentNo;
      $this->reference = $reference;
      $this->error = $error;
      $this->colliNo = $colliNo;
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
     * @return \SuusApi\Client\ColliResult
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
     * @return \SuusApi\Client\ColliResult
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
     * @return \SuusApi\Client\ColliResult
     */
    public function setError($error)
    {
      $this->error = $error;
      return $this;
    }

    /**
     * @return Colli[]
     */
    public function getColliNo()
    {
      return $this->colliNo;
    }

    /**
     * @param Colli[] $colliNo
     * @return \SuusApi\Client\ColliResult
     */
    public function setColliNo($colliNo)
    {
      $this->colliNo = $colliNo;
      return $this;
    }

}
