<?php


namespace App\Third\Uc\Creative\Service;


use App\Third\Kernel\BaseClient;

class Client extends BaseClient
{
    public function __construct($app)
    {
        parent::__construct($app->config);
    }

    /**
     * 新增推广创意
     * @param $data
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function addCreative($data)
    {
        return $this->baseRequest('creative/add', $data);
    }

    /**
     * 更新推广创意的开启/暂停状态
     * @param $data
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function pausedUpdate($data)
    {
        return $this->baseRequest('paused/update', $data);
    }

    /**
     * 根据推广计划ID获取创意列表
     * @param $data
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCreative($data)
    {
        return $this->baseRequest('creative/getCreativeByCampaignId', $data);
    }
}