<?php

namespace SuusApi\Client;

class Colli
{

    /**
     * @var string $colliNo
     */
    protected $colliNo = null;

    /**
     * @param string $colliNo
     */
    public function __construct($colliNo)
    {
      $this->colliNo = $colliNo;
    }

    /**
     * @return string
     */
    public function getColliNo()
    {
      return $this->colliNo;
    }

    /**
     * @param string $colliNo
     * @return \SuusApi\Client\Colli
     */
    public function setColliNo($colliNo)
    {
      $this->colliNo = $colliNo;
      return $this;
    }

}
