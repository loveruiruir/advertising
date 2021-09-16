<?php


namespace App\Third\Uc\Adgroup\Service;


use App\Third\Kernel\Container;
use App\Third\Kernel\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    /**
     * 广告组信息
     * @param Container $app
     */
    public function register(Container $app)
    {
        $app['adgroup'] = function ($app){
            return new Client($app);
        };
    }
}