<?php

namespace SuusApi\Client;

class AdditionalServices
{

    /**
     * @var AdditionalService[] $AdditionalServices
     */
    protected $AdditionalServices = null;

    /**
     * @param AdditionalService[] $AdditionalServices
     */
    public function __construct(array $AdditionalServices)
    {
      $this->AdditionalServices = $AdditionalServices;
    }

    /**
     * @return AdditionalService[]
     */
    public function getAdditionalServices()
    {
      return $this->AdditionalServices;
    }

    /**
     * @param AdditionalService[] $AdditionalServices
     * @return \SuusApi\Client\AdditionalServices
     */
    public function setAdditionalServices(array $AdditionalServices)
    {
      $this->AdditionalServices = $AdditionalServices;
      return $this;
    }

}
