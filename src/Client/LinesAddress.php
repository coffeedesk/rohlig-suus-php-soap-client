<?php

namespace SuusApi\Client;

class LinesAddress
{

    /**
     * @var LineAddress[] $LinesAddress
     */
    protected $LinesAddress = null;

    /**
     * @param LineAddress[] $LinesAddress
     */
    public function __construct(array $LinesAddress)
    {
      $this->LinesAddress = $LinesAddress;
    }

    /**
     * @return LineAddress[]
     */
    public function getLinesAddress()
    {
      return $this->LinesAddress;
    }

    /**
     * @param LineAddress[] $LinesAddress
     * @return \SuusApi\Client\LinesAddress
     */
    public function setLinesAddress(array $LinesAddress)
    {
      $this->LinesAddress = $LinesAddress;
      return $this;
    }

}
