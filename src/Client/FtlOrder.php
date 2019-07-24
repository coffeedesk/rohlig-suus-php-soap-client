<?php

namespace SuusApi\Client;

class FtlOrder
{

    /**
     * @var FtlOrderHeader $header
     */
    protected $header = null;

    /**
     * @var LinesAddress $linesAddress
     */
    protected $linesAddress = null;

    /**
     * @var AdditionalServices $additionalServices
     */
    protected $additionalServices = null;

    /**
     * @param FtlOrderHeader $header
     * @param LinesAddress $linesAddress
     */
    public function __construct($header, $linesAddress)
    {
      $this->header = $header;
      $this->linesAddress = $linesAddress;
    }

    /**
     * @return FtlOrderHeader
     */
    public function getHeader()
    {
      return $this->header;
    }

    /**
     * @param FtlOrderHeader $header
     * @return \SuusApi\Client\FtlOrder
     */
    public function setHeader($header)
    {
      $this->header = $header;
      return $this;
    }

    /**
     * @return LinesAddress
     */
    public function getLinesAddress()
    {
      return $this->linesAddress;
    }

    /**
     * @param LinesAddress $linesAddress
     * @return \SuusApi\Client\FtlOrder
     */
    public function setLinesAddress($linesAddress)
    {
      $this->linesAddress = $linesAddress;
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
     * @return \SuusApi\Client\FtlOrder
     */
    public function setAdditionalServices($additionalServices)
    {
      $this->additionalServices = $additionalServices;
      return $this;
    }

}
