<?php

namespace SuusApi\Client;

class FtlOrderHeader
{

    /**
     * @var string $costGroup
     */
    protected $costGroup = null;

    /**
     * @var string $ordererId
     */
    protected $ordererId = null;

    /**
     * @var boolean $haccp
     */
    protected $haccp = null;

    /**
     * @var float $freight
     */
    protected $freight = null;

    /**
     * @var string $freightCurrency
     */
    protected $freightCurrency = null;

    /**
     * @var float $goodsValue
     */
    protected $goodsValue = null;

    /**
     * @var string $goodsCurrency
     */
    protected $goodsCurrency = null;

    /**
     * @var string $orderer
     */
    protected $orderer = null;

    /**
     * @var string $reference1
     */
    protected $reference1 = null;

    /**
     * @var string $reference2
     */
    protected $reference2 = null;

    /**
     * @var string $payer
     */
    protected $payer = null;

    /**
     * @var string $remarks
     */
    protected $remarks = null;

    /**
     * @param string $ordererId
     * @param boolean $haccp
     * @param string $reference1
     * @param string $reference2
     * @param string $payer
     * @param string $remarks
     */
    public function __construct($ordererId, $haccp, $reference1, $reference2, $payer, $remarks)
    {
      $this->ordererId = $ordererId;
      $this->haccp = $haccp;
      $this->reference1 = $reference1;
      $this->reference2 = $reference2;
      $this->payer = $payer;
      $this->remarks = $remarks;
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
     * @return \SuusApi\Client\FtlOrderHeader
     */
    public function setCostGroup($costGroup)
    {
      $this->costGroup = $costGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrdererId()
    {
      return $this->ordererId;
    }

    /**
     * @param string $ordererId
     * @return \SuusApi\Client\FtlOrderHeader
     */
    public function setOrdererId($ordererId)
    {
      $this->ordererId = $ordererId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHaccp()
    {
      return $this->haccp;
    }

    /**
     * @param boolean $haccp
     * @return \SuusApi\Client\FtlOrderHeader
     */
    public function setHaccp($haccp)
    {
      $this->haccp = $haccp;
      return $this;
    }

    /**
     * @return float
     */
    public function getFreight()
    {
      return $this->freight;
    }

    /**
     * @param float $freight
     * @return \SuusApi\Client\FtlOrderHeader
     */
    public function setFreight($freight)
    {
      $this->freight = $freight;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreightCurrency()
    {
      return $this->freightCurrency;
    }

    /**
     * @param string $freightCurrency
     * @return \SuusApi\Client\FtlOrderHeader
     */
    public function setFreightCurrency($freightCurrency)
    {
      $this->freightCurrency = $freightCurrency;
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
     * @return \SuusApi\Client\FtlOrderHeader
     */
    public function setGoodsValue($goodsValue)
    {
      $this->goodsValue = $goodsValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getGoodsCurrency()
    {
      return $this->goodsCurrency;
    }

    /**
     * @param string $goodsCurrency
     * @return \SuusApi\Client\FtlOrderHeader
     */
    public function setGoodsCurrency($goodsCurrency)
    {
      $this->goodsCurrency = $goodsCurrency;
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
     * @return \SuusApi\Client\FtlOrderHeader
     */
    public function setOrderer($orderer)
    {
      $this->orderer = $orderer;
      return $this;
    }

    /**
     * @return string
     */
    public function getReference1()
    {
      return $this->reference1;
    }

    /**
     * @param string $reference1
     * @return \SuusApi\Client\FtlOrderHeader
     */
    public function setReference1($reference1)
    {
      $this->reference1 = $reference1;
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
     * @return \SuusApi\Client\FtlOrderHeader
     */
    public function setReference2($reference2)
    {
      $this->reference2 = $reference2;
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
     * @return \SuusApi\Client\FtlOrderHeader
     */
    public function setPayer($payer)
    {
      $this->payer = $payer;
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
     * @return \SuusApi\Client\FtlOrderHeader
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

}
