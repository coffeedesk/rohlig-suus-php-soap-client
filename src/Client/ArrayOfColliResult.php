<?php

namespace SuusApi\Client;

class ArrayOfColliResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ColliResult[] $ArrayOfColliResult
     */
    protected $ArrayOfColliResult = null;

    /**
     * @param ColliResult[] $ArrayOfColliResult
     */
    public function __construct(array $ArrayOfColliResult)
    {
      $this->ArrayOfColliResult = $ArrayOfColliResult;
    }

    /**
     * @return ColliResult[]
     */
    public function getArrayOfColliResult()
    {
      return $this->ArrayOfColliResult;
    }

    /**
     * @param ColliResult[] $ArrayOfColliResult
     * @return \SuusApi\Client\ArrayOfColliResult
     */
    public function setArrayOfColliResult(array $ArrayOfColliResult)
    {
      $this->ArrayOfColliResult = $ArrayOfColliResult;
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
      return isset($this->ArrayOfColliResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ColliResult
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfColliResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ColliResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfColliResult[] = $value;
      } else {
        $this->ArrayOfColliResult[$offset] = $value;
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
      unset($this->ArrayOfColliResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ColliResult Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfColliResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfColliResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfColliResult);
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
      reset($this->ArrayOfColliResult);
    }

    /**
     * Countable implementation
     *
     * @return ColliResult Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfColliResult);
    }

}
