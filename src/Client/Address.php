<?php

namespace SuusApi\Client;

/**
 * Class Address
 * @package SuusApi\Client
 * @property e-mail
 */
class Address
{

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
     * @var string $phone
     */
    protected $phone = null;

    /**
     * @var string $mobilePhone
     */
    protected $mobilePhone = null;

    /**
     * @var string $person
     */
    protected $person = null;

    /**
     * @param string $name
     * @param string $street
     * @param string $streetNo
     * @param string $postCode
     * @param string $city
     * @param string $country
     * @param string $person
     */
    public function __construct($name, $street, $streetNo, $postCode, $city, $country, $person)
    {
      $this->name = $name;
      $this->street = $street;
      $this->streetNo = $streetNo;
      $this->postCode = $postCode;
      $this->city = $city;
      $this->country = $country;
      $this->person = $person;
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
     * @return \SuusApi\Client\Address
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
     * @return \SuusApi\Client\Address
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
     * @return \SuusApi\Client\Address
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
     * @return \SuusApi\Client\Address
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
     * @return \SuusApi\Client\Address
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
     * @return \SuusApi\Client\Address
     */
    public function setCountry($country)
    {
      $this->country = $country;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->{'e-mail'};
    }

    /**
     * @param string $email
     * @return \SuusApi\Client\Address
     */
    public function setEmail($email)
    {
      $this->{'e-mail'} = $email;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
      return $this->phone;
    }

    /**
     * @param string $phone
     * @return \SuusApi\Client\Address
     */
    public function setPhone($phone)
    {
      $this->phone = $phone;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobilePhone()
    {
      return $this->mobilePhone;
    }

    /**
     * @param string $mobilePhone
     * @return \SuusApi\Client\Address
     */
    public function setMobilePhone($mobilePhone)
    {
      $this->mobilePhone = $mobilePhone;
      return $this;
    }

    /**
     * @return string
     */
    public function getPerson()
    {
      return $this->person;
    }

    /**
     * @param string $person
     * @return \SuusApi\Client\Address
     */
    public function setPerson($person)
    {
      $this->person = $person;
      return $this;
    }

}
