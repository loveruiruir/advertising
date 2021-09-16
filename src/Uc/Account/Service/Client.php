<?php


namespace App\Third\Uc\Account\Service;


use App\Third\Kernel\BaseClient;

class Client extends BaseClient
{
    public function __construct($app)
    {
        parent::__construct($app->config);
    }


    /**
     * 获取username所对应的账户信息
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAccount()
    {
        return $this->baseRequest('account/getAccount');
    }


}