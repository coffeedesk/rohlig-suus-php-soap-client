<?php

namespace SuusApi\Client;

class SeaOrder
{

    /**
     * @var SeaOrderHeader $header
     */
    protected $header = null;

    /**
     * @var Address $loadingAddress
     */
    protected $loadingAddress = null;

    /**
     * @var Address $unloadingAddress
     */
    protected $unloadingAddress = null;

    /**
     * @var Address $shipper
     */
    protected $shipper = null;

    /**
     * @var Address $consignee
     */
    protected $consignee = null;

    /**
     * @var SeaLines $seaLines
     */
    protected $seaLines = null;

    /**
     * @var AdditionalServices $additionalServices
     */
    protected $additionalServices = null;

    /**
     * @param SeaOrderHeader $header
     * @param Address $loadingAddress
     * @param Address $unloadingAddress
     * @param SeaLines $seaLines
     */
    public function __construct($header, $loadingAddress, $unloadingAddress, $seaLines)
    {
      $this->header = $header;
      $this->loadingAddress = $loadingAddress;
      $this->unloadingAddress = $unloadingAddress;
      $this->seaLines = $seaLines;
    }

    /**
     * @return SeaOrderHeader
     */
    public function getHeader()
    {
      return $this->header;
    }

    /**
     * @param SeaOrderHeader $header
     * @return \SuusApi\Client\SeaOrder
     */
    public function setHeader($header)
    {
      $this->header = $header;
      return $this;
    }

    /**
     * @return Address
     */
    public function getLoadingAddress()
    {
      return $this->loadingAddress;
    }

    /**
     * @param Address $loadingAddress
     * @return \SuusApi\Client\SeaOrder
     */
    public function setLoadingAddress($loadingAddress)
    {
      $this->loadingAddress = $loadingAddress;
      return $this;
    }

    /**
     * @return Address
     */
    public function getUnloadingAddress()
    {
      return $this->unloadingAddress;
    }

    /**
     * @param Address $unloadingAddress
     * @return \SuusApi\Client\SeaOrder
     */
    public function setUnloadingAddress($unloadingAddress)
    {
      $this->unloadingAddress = $unloadingAddress;
      return $this;
    }

    /**
     * @return Address
     */
    public function getShipper()
    {
      return $this->shipper;
    }

    /**
     * @param Address $shipper
     * @return \SuusApi\Client\SeaOrder
     */
    public function setShipper($shipper)
    {
      $this->shipper = $shipper;
      return $this;
    }

    /**
     * @return Address
     */
    public function getConsignee()
    {
      return $this->consignee;
    }

    /**
     * @param Address $consignee
     * @return \SuusApi\Client\SeaOrder
     */
    public function setConsignee($consignee)
    {
      $this->consignee = $consignee;
      return $this;
    }

    /**
     * @return SeaLines
     */
    public function getSeaLines()
    {
      return $this->seaLines;
    }

    /**
     * @param SeaLines $seaLines
     * @return \SuusApi\Client\SeaOrder
     */
    public function setSeaLines($seaLines)
    {
      $this->seaLines = $seaLines;
      return $this;
    }

    /**
     * @return AdditionalServices
     */
    public function getAdditionalServices()
    {
      return $this->additionalServices;
    }

    /**
     * @param AdditionalServices $additionalServices
     * @return \SuusApi\Client\SeaOrder
     */
    public function setAdditionalServices($additionalServices)
    {
      $this->additionalServices = $additionalServices;
      return $this;
    }

}
