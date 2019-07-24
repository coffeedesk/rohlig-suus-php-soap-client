<?php

namespace SuusApi\Client;

class Packages
{

    /**
     * @var Package[] $Packages
     */
    protected $Packages = null;

    /**
     * @param Package[] $Packages
     */
    public function __construct(array $Packages)
    {
      $this->Packages = $Packages;
    }

    /**
     * @return Package[]
     */
    public function getPackages()
    {
      return $this->Packages;
    }

    /**
     * @param Package[] $Packages
     * @return \SuusApi\Client\Packages
     */
    public function setPackages(array $Packages)
    {
      $this->Packages = $Packages;
      return $this;
    }

}
