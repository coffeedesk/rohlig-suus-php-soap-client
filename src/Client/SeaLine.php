<?php

namespace SuusApi\Client;

class SeaLine
{

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var float $quantity
     */
    protected $quantity = null;

    /**
     * @var string $symbol
     */
    protected $symbol = null;

    /**
     * @var float $weightKg
     */
    protected $weightKg = null;

    /**
     * @var float $volumeM3
     */
    protected $volumeM3 = null;

    /**
     * @var string $cnCode
     */
    protected $cnCode = null;

    /**
     * @var boolean $stackable
     */
    protected $stackable = null;

    /**
     * @var float $lengthM
     */
    protected $lengthM = null;

    /**
     * @var float $widthM
     */
    protected $widthM = null;

    /**
     * @var float $heightM
     */
    protected $heightM = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @var string $containerType
     */
    protected $containerType = null;

    /**
     * @var string $containerNumber
     */
    protected $containerNumber = null;

    /**
     * @var string $remarks
     */
    protected $remarks = null;

    /**
     * @param string $description
     * @param float $quantity
     * @param float $weightKg
     */
    public function __construct($description, $quantity, $weightKg)
    {
      $this->description = $description;
      $this->quantity = $quantity;
      $this->weightKg = $weightKg;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \SuusApi\Client\SeaLine
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
    }

    /**
     * @return float
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return \SuusApi\Client\SeaLine
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
      return $this;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
      return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return \SuusApi\Client\SeaLine
     */
    public function setSymbol($symbol)
    {
      $this->symbol = $symbol;
      return $this;
    }

    /**
     * @return float
     */
    public function getWeightKg()
    {
      return $this->weightKg;
    }

    /**
     * @param float $weightKg
     * @return \SuusApi\Client\SeaLine
     */
    public function setWeightKg($weightKg)
    {
      $this->weightKg = $weightKg;
      return $this;
    }

    /**
     * @return float
     */
    public function getVolumeM3()
    {
      return $this->volumeM3;
    }

    /**
     * @param float $volumeM3
     * @return \SuusApi\Client\SeaLine
     */
    public function setVolumeM3($volumeM3)
    {
      $this->volumeM3 = $volumeM3;
      return $this;
    }

    /**
     * @return string
     */
    public function getCnCode()
    {
      return $this->cnCode;
    }

    /**
     * @param string $cnCode
     * @return \SuusApi\Client\SeaLine
     */
    public function setCnCode($cnCode)
    {
      $this->cnCode = $cnCode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getStackable()
    {
      return $this->stackable;
    }

    /**
     * @param boolean $stackable
     * @return \SuusApi\Client\SeaLine
     */
    public function setStackable($stackable)
    {
      $this->stackable = $stackable;
      return $this;
    }

    /**
     * @return float
     */
    public function getLengthM()
    {
      return $this->lengthM;
    }

    /**
     * @param float $lengthM
     * @return \SuusApi\Client\SeaLine
     */
    public function setLengthM($lengthM)
    {
      $this->lengthM = $lengthM;
      return $this;
    }

    /**
     * @return float
     */
    public function getWidthM()
    {
      return $this->widthM;
    }

    /**
     * @param float $widthM
     * @return \SuusApi\Client\SeaLine
     */
    public function setWidthM($widthM)
    {
      $this->widthM = $widthM;
      return $this;
    }

    /**
     * @return float
     */
    public function getHeightM()
    {
      return $this->heightM;
    }

    /**
     * @param float $heightM
     * @return \SuusApi\Client\SeaLine
     */
    public function setHeightM($heightM)
    {
      $this->heightM = $heightM;
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
     * @return \SuusApi\Client\SeaLine
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainerType()
    {
      return $this->containerType;
    }

    /**
     * @param string $containerType
     * @return \SuusApi\Client\SeaLine
     */
    public function setContainerType($containerType)
    {
      $this->containerType = $containerType;
      return $this;
    }

    /**
     * @return string
     */
    public function getContainerNumber()
    {
      return $this->containerNumber;
    }

    /**
     * @param string $containerNumber
     * @return \SuusApi\Client\SeaLine
     */
    public function setContainerNumber($containerNumber)
    {
      $this->containerNumber = $containerNumber;
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
     * @return \SuusApi\Client\SeaLine
     */
    public function setRemarks($remarks)
    {
      $this->remarks = $remarks;
      return $this;
    }

}
