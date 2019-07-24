<?php

namespace SuusApi\Client;

class ArrayOfErrorCodesResult implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ErrorCodesResult[] $ArrayOfErrorCodesResult
     */
    protected $ArrayOfErrorCodesResult = null;

    /**
     * @param ErrorCodesResult[] $ArrayOfErrorCodesResult
     */
    public function __construct(array $ArrayOfErrorCodesResult)
    {
      $this->ArrayOfErrorCodesResult = $ArrayOfErrorCodesResult;
    }

    /**
     * @return ErrorCodesResult[]
     */
    public function getArrayOfErrorCodesResult()
    {
      return $this->ArrayOfErrorCodesResult;
    }

    /**
     * @param ErrorCodesResult[] $ArrayOfErrorCodesResult
     * @return \SuusApi\Client\ArrayOfErrorCodesResult
     */
    public function setArrayOfErrorCodesResult(array $ArrayOfErrorCodesResult)
    {
      $this->ArrayOfErrorCodesResult = $ArrayOfErrorCodesResult;
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
      return isset($this->ArrayOfErrorCodesResult[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ErrorCodesResult
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfErrorCodesResult[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ErrorCodesResult $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfErrorCodesResult[] = $value;
      } else {
        $this->ArrayOfErrorCodesResult[$offset] = $value;
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
      unset($this->ArrayOfErrorCodesResult[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ErrorCodesResult Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfErrorCodesResult);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfErrorCodesResult);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfErrorCodesResult);
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
      reset($this->ArrayOfErrorCodesResult);
    }

    /**
     * Countable implementation
     *
     * @return ErrorCodesResult Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfErrorCodesResult);
    }

}
