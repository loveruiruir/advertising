<?php


namespace App\Third\Kernel;


class ServiceContainer extends Container
{
    protected $provider;

    public $config;

    /**
     * ServiceContainer constructor.
     * @param $config
     */
    public function __construct($config)
    {
        $this->setProvider($this->getProvider());

        $this->config = $config;
    }

    /**
     * @param array $inteface
     */
    public function setProvider(array $inteface)
    {
        foreach ($inteface as $value) {
            $this->provider(new $value());
        }
    }

    public function getProvider()
    {
        return $this->provider;
    }

    public function __set($name, $value)
    {
        dd($name);
    }

    public function __get($name)
    {
        return $this->offsetGet($name);
    }
}