<?php


namespace App\Third\Uc\Adgroup\Service;


use App\Third\Kernel\BaseClient;

class Client extends BaseClient
{
    public function __construct($app)
    {
        parent::__construct($app->config);
    }
    /**
     * 新增推广组
     * @param $data
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addAdgroup($data)
    {
        return $this->baseRequest("adgroup/add", $data);
    }

    /**
     * 获取广告组
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getAllAdGroup()
    {
        return $this->baseRequest("adgroup/getAllAdGroup");
    }

    /**
     * 更新广告组的开起/暂停状态
     * @param $data
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function adgroupPausedUpdate($data)
    {
        return $this->baseRequest("adgroup/paused/update", $data);
    }
}