<?php

namespace SuusApi\Client;

class ReturnInfo
{

    /**
     * @var boolean $success
     */
    protected $success = null;

    /**
     * @var string $returnCode
     */
    protected $returnCode = null;

    /**
     * @var string $returnDesc
     */
    protected $returnDesc = null;

    /**
     * @param boolean $success
     * @param string $returnCode
     * @param string $returnDesc
     */
    public function __construct($success, $returnCode, $returnDesc)
    {
      $this->success = $success;
      $this->returnCode = $returnCode;
      $this->returnDesc = $returnDesc;
    }

    /**
     * @return boolean
     */
    public function getSuccess()
    {
      return $this->success;
    }

    /**
     * @param boolean $success
     * @return \SuusApi\Client\ReturnInfo
     */
    public function setSuccess($success)
    {
      $this->success = $success;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnCode()
    {
      return $this->returnCode;
    }

    /**
     * @param string $returnCode
     * @return \SuusApi\Client\ReturnInfo
     */
    public function setReturnCode($returnCode)
    {
      $this->returnCode = $returnCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getReturnDesc()
    {
      return $this->returnDesc;
    }

    /**
     * @param string $returnDesc
     * @return \SuusApi\Client\ReturnInfo
     */
    public function setReturnDesc($returnDesc)
    {
      $this->returnDesc = $returnDesc;
      return $this;
    }

}
