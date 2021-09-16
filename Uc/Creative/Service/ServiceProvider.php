<?php


namespace App\Third\Uc\Creative\Service;



use App\Third\Kernel\Container;
use App\Third\Kernel\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $app)
    {
        $app['creative'] = function ($app){
            return new Client($app);
        };
    }
}