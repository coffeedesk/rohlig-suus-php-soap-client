<?php

namespace SuusApi\Client;

class OrderHeader
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
     * @var string $freight
     */
    protected $freight = null;

    /**
     * @var string $currency
     */
    protected $currency = null;

    /**
     * @var string $category
     */
    protected $category = null;

    /**
     * @var string $orderType
     */
    protected $orderType = null;

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
     * @return \SuusApi\Client\OrderHeader
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
     * @return \SuusApi\Client\OrderHeader
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
     * @return \SuusApi\Client\OrderHeader
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
     * @return \SuusApi\Client\OrderHeader
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
     * @return \SuusApi\Client\OrderHeader
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
     * @return \SuusApi\Client\OrderHeader
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
     * @return \SuusApi\Client\OrderHeader
     */
    public function setCostGroup($costGroup)
    {
      $this->costGroup = $costGroup;
      return $this;
    }

    /**
     * @return string
     */
    public function getFreight()
    {
      return $this->freight;
    }

    /**
     * @param string $freight
     * @return \SuusApi\Client\OrderHeader
     */
    public function setFreight($freight)
    {
      $this->freight = $freight;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
      return $this->currency;
    }

    /**
     * @param string $currency
     * @return \SuusApi\Client\OrderHeader
     */
    public function setCurrency($currency)
    {
      $this->currency = $currency;
      return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
      return $this->category;
    }

    /**
     * @param string $category
     * @return \SuusApi\Client\OrderHeader
     */
    public function setCategory($category)
    {
      $this->category = $category;
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
     * @return \SuusApi\Client\OrderHeader
     */
    public function setOrderType($orderType)
    {
      $this->orderType = $orderType;
      return $this;
    }

}
