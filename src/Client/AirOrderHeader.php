<?php

namespace SuusApi\Client;

class AirOrderHeader
{

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var date $loadingDate
     */
    protected $loadingDate = null;

    /**
     * @var date $unloadingDate
     */
    protected $unloadingDate = null;

    /**
     * @var string $descriptionOfGoods
     */
    protected $descriptionOfGoods = null;

    /**
     * @var string $remarks
     */
    protected $remarks = null;

    /**
     * @var string $incoterms
     */
    protected $incoterms = null;

    /**
     * @var string $costGroup
     */
    protected $costGroup = null;

    /**
     * @var string $orderId
     */
    protected $orderId = null;

    /**
     * @var string $orderer
     */
    protected $orderer = null;

    /**
     * @var string $branch
     */
    protected $branch = null;

    /**
     * @var string $department
     */
    protected $department = null;

    /**
     * @var string $mawb
     */
    protected $mawb = null;

    /**
     * @var string $hawb
     */
    protected $hawb = null;

    /**
     * @param string $reference
     * @param string $descriptionOfGoods
     * @param string $remarks
     */
    public function __construct($reference, $descriptionOfGoods, $remarks)
    {
      $this->reference = $reference;
      $this->descriptionOfGoods = $descriptionOfGoods;
      $this->remarks = $remarks;
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
     * @return \SuusApi\Client\AirOrderHeader
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return date
     */
    public function getLoadingDate()
    {
      return $this->loadingDate;
    }

    /**
     * @param date $loadingDate
     * @return \SuusApi\Client\AirOrderHeader
     */
    public function setLoadingDate($loadingDate)
    {
      $this->loadingDate = $loadingDate;
      return $this;
    }

    /**
     * @return date
     */
    public function getUnloadingDate()
    {
      return $this->unloadingDate;
    }

    /**
     * @param date $unloadingDate
     * @return \SuusApi\Client\AirOrderHeader
     */
    public function setUnloadingDate($unloadingDate)
    {
      $this->unloadingDate = $unloadingDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptionOfGoods()
    {
      return $this->descriptionOfGoods;
    }

    /**
     * @param string $descriptionOfGoods
     * @return \SuusApi\Client\AirOrderHeader
     */
    public function setDescriptionOfGoods($descriptionOfGoods)
    {
      $this->descriptionOfGoods = $descriptionOfGoods;
      return $this;
    }

    /**
     * @return string
     */
    public function getRemarks()
    {
      return $this->remarks;
    }

    /**
     * @param string $remarks
     * @return \SuusApi\Client\AirOrderHeader
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

    /**
     * @return string
     */
    public function getIncoterms()
    {
      return $this->incoterms;
    }

    /**
     * @param string $incoterms
     * @return \SuusApi\Client\AirOrderHeader
     */
    public function setIncoterms($incoterms)
    {
      $this->incoterms = $incoterms;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostGroup()
    {
      return $this->costGroup;
    }

    /**
     * @param string $costGroup
     * @return \SuusApi\Client\AirOrderHeader
     */
    public function setCostGroup($costGroup)
    {
      $this->costGroup = $costGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return \SuusApi\Client\AirOrderHeader
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderer()
    {
      return $this->orderer;
    }

    /**
     * @param string $orderer
     * @return \SuusApi\Client\AirOrderHeader
     */
    public function setOrderer($orderer)
    {
      $this->orderer = $orderer;
      return $this;
    }

    /**
     * @return string
     */
    public function getBranch()
    {
      return $this->branch;
    }

    /**
     * @param string $branch
     * @return \SuusApi\Client\AirOrderHeader
     */
    public function setBranch($branch)
    {
      $this->branch = $branch;
      return $this;
    }

    /**
     * @return string
     */
    public function getDepartment()
    {
      return $this->department;
    }

    /**
     * @param string $department
     * @return \SuusApi\Client\AirOrderHeader
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return string
     */
    public function getMawb()
    {
      return $this->mawb;
    }

    /**
     * @param string $mawb
     * @return \SuusApi\Client\AirOrderHeader
     */
    public function setMawb($mawb)
    {
      $this->mawb = $mawb;
      return $this;
    }

    /**
     * @return string
     */
    public function getHawb()
    {
      return $this->hawb;
    }

    /**
     * @param string $hawb
     * @return \SuusApi\Client\AirOrderHeader
     */
    public function setHawb($hawb)
    {
      $this->hawb = $hawb;
      return $this;
    }

}
