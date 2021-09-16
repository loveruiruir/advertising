<?php


namespace App\Third\Uc\Account\Service;

use App\Third\Kernel\Container;
use App\Third\Kernel\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['account'] = function ($app) {
            return new Client($app);
        };
    }
}