<?php

namespace SuusApi\Client;

class ArrayOfShipmentsResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ShipmentsResult[] $ArrayOfShipmentsResult
     */
    protected $ArrayOfShipmentsResult = null;

    /**
     * @param ShipmentsResult[] $ArrayOfShipmentsResult
     */
    public function __construct(array $ArrayOfShipmentsResult)
    {
      $this->ArrayOfShipmentsResult = $ArrayOfShipmentsResult;
    }

    /**
     * @return ShipmentsResult[]
     */
    public function getArrayOfShipmentsResult()
    {
      return $this->ArrayOfShipmentsResult;
    }

    /**
     * @param ShipmentsResult[] $ArrayOfShipmentsResult
     * @return \SuusApi\Client\ArrayOfShipmentsResult
     */
    public function setArrayOfShipmentsResult(array $ArrayOfShipmentsResult)
    {
      $this->ArrayOfShipmentsResult = $ArrayOfShipmentsResult;
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
      return isset($this->ArrayOfShipmentsResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ShipmentsResult
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfShipmentsResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ShipmentsResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfShipmentsResult[] = $value;
      } else {
        $this->ArrayOfShipmentsResult[$offset] = $value;
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
      unset($this->ArrayOfShipmentsResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ShipmentsResult Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfShipmentsResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfShipmentsResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfShipmentsResult);
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
      reset($this->ArrayOfShipmentsResult);
    }

    /**
     * Countable implementation
     *
     * @return ShipmentsResult Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfShipmentsResult);
    }

}
