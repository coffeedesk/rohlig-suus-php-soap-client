<?php

namespace SuusApi\Client;

class AirOrder
{

    /**
     * @var AirOrderHeader $header
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
     * @var Packages $packages
     */
    protected $packages = null;

    /**
     * @var AdditionalServices $additionalServices
     */
    protected $additionalServices = null;

    /**
     * @param AirOrderHeader $header
     * @param Address $loadingAddress
     * @param Address $unloadingAddress
     * @param Packages $packages
     */
    public function __construct($header, $loadingAddress, $unloadingAddress, $packages)
    {
      $this->header = $header;
      $this->loadingAddress = $loadingAddress;
      $this->unloadingAddress = $unloadingAddress;
      $this->packages = $packages;
    }

    /**
     * @return AirOrderHeader
     */
    public function getHeader()
    {
      return $this->header;
    }

    /**
     * @param AirOrderHeader $header
     * @return \SuusApi\Client\AirOrder
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
     * @return \SuusApi\Client\AirOrder
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
     * @return \SuusApi\Client\AirOrder
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
     * @return \SuusApi\Client\AirOrder
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
     * @return \SuusApi\Client\AirOrder
     */
    public function setConsignee($consignee)
    {
      $this->consignee = $consignee;
      return $this;
    }

    /**
     * @return Packages
     */
    public function getPackages()
    {
      return $this->packages;
    }

    /**
     * @param Packages $packages
     * @return \SuusApi\Client\AirOrder
     */
    public function setPackages($packages)
    {
      $this->packages = $packages;
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
     * @return \SuusApi\Client\AirOrder
     */
    public function setAdditionalServices($additionalServices)
    {
      $this->additionalServices = $additionalServices;
      return $this;
    }

}
