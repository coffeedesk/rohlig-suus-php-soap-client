<?php

namespace SuusApi\Client;

class Package
{

    /**
     * @var string $symbol
     */
    protected $symbol = null;

    /**
     * @var int $quantity
     */
    protected $quantity = null;

    /**
     * @var float $weightKg
     */
    protected $weightKg = null;

    /**
     * @var int $lenghtCm
     */
    protected $lenghtCm = null;

    /**
     * @var int $widthCm
     */
    protected $widthCm = null;

    /**
     * @var int $heightCm
     */
    protected $heightCm = null;

    /**
     * @var int $returnable
     */
    protected $returnable = null;

    /**
     * @var int $stackable
     */
    protected $stackable = null;

    /**
     * @param string $symbol
     * @param int $quantity
     * @param float $weightKg
     * @param int $lenghtCm
     * @param int $widthCm
     * @param int $heightCm
     */
    public function __construct($symbol, $quantity, $weightKg, $lenghtCm, $widthCm, $heightCm)
    {
      $this->symbol = $symbol;
      $this->quantity = $quantity;
      $this->weightKg = $weightKg;
      $this->lenghtCm = $lenghtCm;
      $this->widthCm = $widthCm;
      $this->heightCm = $heightCm;
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
     * @return \SuusApi\Client\Package
     */
    public function setSymbol($symbol)
    {
      $this->symbol = $symbol;
      return $this;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
      return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return \SuusApi\Client\Package
     */
    public function setQuantity($quantity)
    {
      $this->quantity = $quantity;
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
     * @return \SuusApi\Client\Package
     */
    public function setWeightKg($weightKg)
    {
      $this->weightKg = $weightKg;
      return $this;
    }

    /**
     * @return int
     */
    public function getLenghtCm()
    {
      return $this->lenghtCm;
    }

    /**
     * @param int $lenghtCm
     * @return \SuusApi\Client\Package
     */
    public function setLenghtCm($lenghtCm)
    {
      $this->lenghtCm = $lenghtCm;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidthCm()
    {
      return $this->widthCm;
    }

    /**
     * @param int $widthCm
     * @return \SuusApi\Client\Package
     */
    public function setWidthCm($widthCm)
    {
      $this->widthCm = $widthCm;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeightCm()
    {
      return $this->heightCm;
    }

    /**
     * @param int $heightCm
     * @return \SuusApi\Client\Package
     */
    public function setHeightCm($heightCm)
    {
      $this->heightCm = $heightCm;
      return $this;
    }

    /**
     * @return int
     */
    public function getReturnable()
    {
      return $this->returnable;
    }

    /**
     * @param int $returnable
     * @return \SuusApi\Client\Package
     */
    public function setReturnable($returnable)
    {
      $this->returnable = $returnable;
      return $this;
    }

    /**
     * @return int
     */
    public function getStackable()
    {
      return $this->stackable;
    }

    /**
     * @param int $stackable
     * @return \SuusApi\Client\Package
     */
    public function setStackable($stackable)
    {
      $this->stackable = $stackable;
      return $this;
    }

}
