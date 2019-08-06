<?php

namespace SuusApi\Client;

class AdditionalServices implements \ArrayAccess, \Iterator, \Countable
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

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->AdditionalServices[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Shipment
     */
    public function offsetGet($offset)
    {
        return $this->AdditionalServices[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Shipment $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (!isset($offset)) {
            $this->AdditionalServices[] = $value;
        } else {
            $this->AdditionalServices[$offset] = $value;
        }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->AdditionalServices[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Shipment Return the current element
     */
    public function current()
    {
        return current($this->AdditionalServices);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->AdditionalServices);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->AdditionalServices);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
        return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
        reset($this->AdditionalServices);
    }

    /**
     * Countable implementation
     *
     * @return Shipment Return count of elements
     */
    public function count()
    {
        return count($this->AdditionalServices);
    }

}
