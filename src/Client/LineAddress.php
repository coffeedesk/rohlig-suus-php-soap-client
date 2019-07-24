<?php

namespace SuusApi\Client;

class LineAddress
{

    /**
     * @var string $lp
     */
    protected $lp = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $street
     */
    protected $street = null;

    /**
     * @var string $streetNo
     */
    protected $streetNo = null;

    /**
     * @var string $postCode
     */
    protected $postCode = null;

    /**
     * @var string $city
     */
    protected $city = null;

    /**
     * @var string $country
     */
    protected $country = null;

    /**
     * @var date $dateFrom
     */
    protected $dateFrom = null;

    /**
     * @var string $timeFrom
     */
    protected $timeFrom = null;

    /**
     * @var string $dateTo
     */
    protected $dateTo = null;

    /**
     * @var string $timeTo
     */
    protected $timeTo = null;

    /**
     * @var string $cargo
     */
    protected $cargo = null;

    /**
     * @var boolean $fullTruck
     */
    protected $fullTruck = null;

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
     * @var float $lenghtM
     */
    protected $lenghtM = null;

    /**
     * @var float $widthM
     */
    protected $widthM = null;

    /**
     * @var float $heightM
     */
    protected $heightM = null;

    /**
     * @var float $loadingMeters
     */
    protected $loadingMeters = null;

    /**
     * @var string $reference
     */
    protected $reference = null;

    /**
     * @param string $lp
     * @param string $type
     * @param string $name
     * @param string $street
     * @param string $streetNo
     * @param string $postCode
     * @param string $city
     * @param string $country
     * @param boolean $fullTruck
     * @param string $symbol
     * @param int $quantity
     * @param float $weightKg
     * @param float $lenghtM
     * @param float $widthM
     * @param float $heightM
     * @param float $loadingMeters
     * @param string $reference
     */
    public function __construct($lp, $type, $name, $street, $streetNo, $postCode, $city, $country, $fullTruck, $symbol, $quantity, $weightKg, $lenghtM, $widthM, $heightM, $loadingMeters, $reference)
    {
      $this->lp = $lp;
      $this->type = $type;
      $this->name = $name;
      $this->street = $street;
      $this->streetNo = $streetNo;
      $this->postCode = $postCode;
      $this->city = $city;
      $this->country = $country;
      $this->fullTruck = $fullTruck;
      $this->symbol = $symbol;
      $this->quantity = $quantity;
      $this->weightKg = $weightKg;
      $this->lenghtM = $lenghtM;
      $this->widthM = $widthM;
      $this->heightM = $heightM;
      $this->loadingMeters = $loadingMeters;
      $this->reference = $reference;
    }

    /**
     * @return string
     */
    public function getLp()
    {
      return $this->lp;
    }

    /**
     * @param string $lp
     * @return \SuusApi\Client\LineAddress
     */
    public function setLp($lp)
    {
      $this->lp = $lp;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \SuusApi\Client\LineAddress
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \SuusApi\Client\LineAddress
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
      return $this->street;
    }

    /**
     * @param string $street
     * @return \SuusApi\Client\LineAddress
     */
    public function setStreet($street)
    {
      $this->street = $street;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetNo()
    {
      return $this->streetNo;
    }

    /**
     * @param string $streetNo
     * @return \SuusApi\Client\LineAddress
     */
    public function setStreetNo($streetNo)
    {
      $this->streetNo = $streetNo;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostCode()
    {
      return $this->postCode;
    }

    /**
     * @param string $postCode
     * @return \SuusApi\Client\LineAddress
     */
    public function setPostCode($postCode)
    {
      $this->postCode = $postCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
      return $this->city;
    }

    /**
     * @param string $city
     * @return \SuusApi\Client\LineAddress
     */
    public function setCity($city)
    {
      $this->city = $city;
      return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
      return $this->country;
    }

    /**
     * @param string $country
     * @return \SuusApi\Client\LineAddress
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return date
     */
    public function getDateFrom()
    {
      return $this->dateFrom;
    }

    /**
     * @param date $dateFrom
     * @return \SuusApi\Client\LineAddress
     */
    public function setDateFrom($dateFrom)
    {
      $this->dateFrom = $dateFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeFrom()
    {
      return $this->timeFrom;
    }

    /**
     * @param string $timeFrom
     * @return \SuusApi\Client\LineAddress
     */
    public function setTimeFrom($timeFrom)
    {
      $this->timeFrom = $timeFrom;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateTo()
    {
      return $this->dateTo;
    }

    /**
     * @param string $dateTo
     * @return \SuusApi\Client\LineAddress
     */
    public function setDateTo($dateTo)
    {
      $this->dateTo = $dateTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeTo()
    {
      return $this->timeTo;
    }

    /**
     * @param string $timeTo
     * @return \SuusApi\Client\LineAddress
     */
    public function setTimeTo($timeTo)
    {
      $this->timeTo = $timeTo;
      return $this;
    }

    /**
     * @return string
     */
    public function getCargo()
    {
      return $this->cargo;
    }

    /**
     * @param string $cargo
     * @return \SuusApi\Client\LineAddress
     */
    public function setCargo($cargo)
    {
      $this->cargo = $cargo;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFullTruck()
    {
      return $this->fullTruck;
    }

    /**
     * @param boolean $fullTruck
     * @return \SuusApi\Client\LineAddress
     */
    public function setFullTruck($fullTruck)
    {
      $this->fullTruck = $fullTruck;
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
     * @return \SuusApi\Client\LineAddress
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
     * @return \SuusApi\Client\LineAddress
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
     * @return \SuusApi\Client\LineAddress
     */
    public function setWeightKg($weightKg)
    {
      $this->weightKg = $weightKg;
      return $this;
    }

    /**
     * @return float
     */
    public function getLenghtM()
    {
      return $this->lenghtM;
    }

    /**
     * @param float $lenghtM
     * @return \SuusApi\Client\LineAddress
     */
    public function setLenghtM($lenghtM)
    {
      $this->lenghtM = $lenghtM;
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
     * @return \SuusApi\Client\LineAddress
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
     * @return \SuusApi\Client\LineAddress
     */
    public function setHeightM($heightM)
    {
      $this->heightM = $heightM;
      return $this;
    }

    /**
     * @return float
     */
    public function getLoadingMeters()
    {
      return $this->loadingMeters;
    }

    /**
     * @param float $loadingMeters
     * @return \SuusApi\Client\LineAddress
     */
    public function setLoadingMeters($loadingMeters)
    {
      $this->loadingMeters = $loadingMeters;
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
     * @return \SuusApi\Client\LineAddress
     */
    public function setReference($reference)
    {
      $this->reference = $reference;
      return $this;
    }

}
