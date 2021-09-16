<?php


namespace App\Third\Kernel;

class Container implements \ArrayAccess
{
    private $keys = [];
    private $values = [];


    public function offsetExists($offset)
    {
        // TODO: Implement offsetExists() method.
    }

    /**
     * @param mixed $offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return $this->values[$offset]($this);
    }

    /**
     * @param mixed $offset
     * @param mixed $value
     */
    public function offsetSet($offset, $value)
    {
        $this->keys[$offset] = true;
        $this->values[$offset] = $value;
    }

    public function offsetUnset($offset)
    {
        // TODO: Implement offsetUnset() method.
    }

    /**
     * @param \App\Third\Kernel\ServiceProviderInterface $inteface
     * @return $this
     */
    public function provider(ServiceProviderInterface $inteface)
    {
        $inteface->register($this);
        return $this;
    }
}