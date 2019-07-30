<?php

namespace SuusApi\Client;

class Packages implements \ArrayAccess, \Iterator, \Countable
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

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
        return isset($this->Packages[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Shipment
     */
    public function offsetGet($offset)
    {
        return $this->Packages[$offset];
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
            $this->Packages[] = $value;
        } else {
            $this->Packages[$offset] = $value;
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
        unset($this->Packages[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Shipment Return the current element
     */
    public function current()
    {
        return current($this->Packages);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
        next($this->Packages);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
        return key($this->Packages);
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
        reset($this->Packages);
    }

    /**
     * Countable implementation
     *
     * @return Shipment Return count of elements
     */
    public function count()
    {
        return count($this->Packages);
    }

}
