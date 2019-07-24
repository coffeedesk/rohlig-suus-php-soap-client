<?php

namespace SuusApi\Client;

class SeaLines
{

    /**
     * @var SeaLine[] $SeaLines
     */
    protected $SeaLines = null;

    /**
     * @param SeaLine[] $SeaLines
     */
    public function __construct(array $SeaLines)
    {
      $this->SeaLines = $SeaLines;
    }

    /**
     * @return SeaLine[]
     */
    public function getSeaLines()
    {
      return $this->SeaLines;
    }

    /**
     * @param SeaLine[] $SeaLines
     * @return \SuusApi\Client\SeaLines
     */
    public function setSeaLines(array $SeaLines)
    {
      $this->SeaLines = $SeaLines;
      return $this;
    }

}
