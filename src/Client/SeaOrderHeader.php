<?php

namespace SuusApi\Client;

class SeaOrderHeader
{

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var string $reference2
     */
    protected $reference2 = null;

    /**
     * @var string $orderType
     */
    protected $orderType = null;

    /**
     * @var date $readyDate
     */
    protected $readyDate = null;

    /**
     * @var string $incoterms
     */
    protected $incoterms = null;

    /**
     * @var string $incotermsSite
     */
    protected $incotermsSite = null;

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
     * @var string $payer
     */
    protected $payer = null;

    /**
     * @var string $branch
     */
    protected $branch = null;

    /**
     * @var string $department
     */
    protected $department = null;

    /**
     * @var string $WSK
     */
    protected $WSK = null;

    /**
     * @var string $billOfLading
     */
    protected $billOfLading = null;

    /**
     * @var float $goodsValue
     */
    protected $goodsValue = null;

    /**
     * @var string $MBL
     */
    protected $MBL = null;

    /**
     * @var string $HBL
     */
    protected $HBL = null;

    /**
     * @var string $portOfLoading
     */
    protected $portOfLoading = null;

    /**
     * @var string $portOfUnloading
     */
    protected $portOfUnloading = null;

    /**
     * @var string $remarks
     */
    protected $remarks = null;

    /**
     * @param string $reference
     * @param string $reference2
     * @param string $incoterms
     */
    public function __construct($reference, $reference2, $incoterms)
    {
      $this->reference = $reference;
      $this->reference2 = $reference2;
      $this->incoterms = $incoterms;
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
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference2()
    {
      return $this->reference2;
    }

    /**
     * @param string $reference2
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setReference2($reference2)
    {
      $this->reference2 = $reference2;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderType()
    {
      return $this->orderType;
    }

    /**
     * @param string $orderType
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setOrderType($orderType)
    {
      $this->orderType = $orderType;
      return $this;
    }

    /**
     * @return date
     */
    public function getReadyDate()
    {
      return $this->readyDate;
    }

    /**
     * @param date $readyDate
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setReadyDate($readyDate)
    {
      $this->readyDate = $readyDate;
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
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setIncoterms($incoterms)
    {
      $this->incoterms = $incoterms;
      return $this;
    }

    /**
     * @return string
     */
    public function getIncotermsSite()
    {
      return $this->incotermsSite;
    }

    /**
     * @param string $incotermsSite
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setIncotermsSite($incotermsSite)
    {
      $this->incotermsSite = $incotermsSite;
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
     * @return \SuusApi\Client\SeaOrderHeader
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
     * @return \SuusApi\Client\SeaOrderHeader
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
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setOrderer($orderer)
    {
      $this->orderer = $orderer;
      return $this;
    }

    /**
     * @return string
     */
    public function getPayer()
    {
      return $this->payer;
    }

    /**
     * @param string $payer
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setPayer($payer)
    {
      $this->payer = $payer;
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
     * @return \SuusApi\Client\SeaOrderHeader
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
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setDepartment($department)
    {
      $this->department = $department;
      return $this;
    }

    /**
     * @return string
     */
    public function getWSK()
    {
      return $this->WSK;
    }

    /**
     * @param string $WSK
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setWSK($WSK)
    {
      $this->WSK = $WSK;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillOfLading()
    {
      return $this->billOfLading;
    }

    /**
     * @param string $billOfLading
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setBillOfLading($billOfLading)
    {
      $this->billOfLading = $billOfLading;
      return $this;
    }

    /**
     * @return float
     */
    public function getGoodsValue()
    {
      return $this->goodsValue;
    }

    /**
     * @param float $goodsValue
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setGoodsValue($goodsValue)
    {
      $this->goodsValue = $goodsValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getMBL()
    {
      return $this->MBL;
    }

    /**
     * @param string $MBL
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setMBL($MBL)
    {
      $this->MBL = $MBL;
      return $this;
    }

    /**
     * @return string
     */
    public function getHBL()
    {
      return $this->HBL;
    }

    /**
     * @param string $HBL
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setHBL($HBL)
    {
      $this->HBL = $HBL;
      return $this;
    }

    /**
     * @return string
     */
    public function getPortOfLoading()
    {
      return $this->portOfLoading;
    }

    /**
     * @param string $portOfLoading
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setPortOfLoading($portOfLoading)
    {
      $this->portOfLoading = $portOfLoading;
      return $this;
    }

    /**
     * @return string
     */
    public function getPortOfUnloading()
    {
      return $this->portOfUnloading;
    }

    /**
     * @param string $portOfUnloading
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setPortOfUnloading($portOfUnloading)
    {
      $this->portOfUnloading = $portOfUnloading;
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
     * @return \SuusApi\Client\SeaOrderHeader
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

}
