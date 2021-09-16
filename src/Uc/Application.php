<?php


namespace App\Third\Uc;


use App\Third\Kernel\ServiceContainer;

/**
 * Class Application
 * @package App\Third\Uc
 *
 * @property \App\Third\Uc\Report\Service\Client $report
 * @property \App\Third\Uc\Creative\Service\Client $creative
 * @property \App\Third\Uc\Campaign\Service\Client $camaign
 * @property \App\Third\Uc\Adgroup\Service\Client $group
 * @property \App\Third\Uc\Account\Service\Client $account
 */
class Application extends ServiceContainer
{
    protected $provider = [
        \App\Third\Uc\Report\Service\ServiceProvider::class,
        \App\Third\Uc\Campaign\Service\ServiceProvider::class,
        \App\Third\Uc\Creative\Service\ServiceProvider::class,
        \App\Third\Uc\Adgroup\Service\ServiceProvider::class,
        \App\Third\Uc\Account\Service\ServiceProvider::class
    ];
}