<?php


namespace App\Third;

/**
 * Class Factory.
 *
 * @method static \App\Third\Uc\Application            uc(array $config)
 */
class Factory
{
    /**
     * @param string $name
     * @param array $config
     *
     */
    public static function make($name, array $config)
    {
        $namespace = Kernel\Support\Str::studly($name);
        $application = "\\App\\Third\\{$namespace}\\Application";
        return new $application($config);
    }

    /**
     * Dynamically pass methods to the application.
     *
     * @param string $name
     * @param array $arguments
     *
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        return self::make($name, ...$arguments);
    }
}