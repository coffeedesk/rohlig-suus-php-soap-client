<?php

namespace SuusApi\Client;

class ArrayOfColli implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Colli[] $ArrayOfColli
     */
    protected $ArrayOfColli = null;

    /**
     * @param Colli[] $ArrayOfColli
     */
    public function __construct(array $ArrayOfColli)
    {
      $this->ArrayOfColli = $ArrayOfColli;
    }

    /**
     * @return Colli[]
     */
    public function getArrayOfColli()
    {
      return $this->ArrayOfColli;
    }

    /**
     * @param Colli[] $ArrayOfColli
     * @return \SuusApi\Client\ArrayOfColli
     */
    public function setArrayOfColli(array $ArrayOfColli)
    {
      $this->ArrayOfColli = $ArrayOfColli;
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
      return isset($this->ArrayOfColli[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Colli
     */
    public function offsetGet($offset)
    {
      return $this->ArrayOfColli[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Colli $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ArrayOfColli[] = $value;
      } else {
        $this->ArrayOfColli[$offset] = $value;
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
      unset($this->ArrayOfColli[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Colli Return the current element
     */
    public function current()
    {
      return current($this->ArrayOfColli);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ArrayOfColli);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ArrayOfColli);
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
      reset($this->ArrayOfColli);
    }

    /**
     * Countable implementation
     *
     * @return Colli Return count of elements
     */
    public function count()
    {
      return count($this->ArrayOfColli);
    }

}
