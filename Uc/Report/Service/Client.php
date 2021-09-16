<?php


namespace App\Third\Uc\Report\Service;


use App\Third\Kernel\BaseClient;

class Client extends BaseClient
{
    public function __construct($app)
    {
        parent::__construct($app->config);
    }
}