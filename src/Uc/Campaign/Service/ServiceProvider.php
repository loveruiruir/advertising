<?php


namespace App\Third\Uc\Campaign\Service;

use App\Third\Kernel\Container;
use App\Third\Kernel\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['campaign'] = function ($app) {
            return new Client($app);
        };
    }
}