<?php


namespace App\Third\Uc\Campaign\Service;


use App\Third\Kernel\BaseClient;

class Client extends BaseClient
{
    public function __construct($app)
    {
        parent::__construct($app->config);
    }

    /**
     * 增加推广计划
     * @param $data
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function campaignAdd($data)
    {
        return $this->baseRequest('campaign/add', $data);
    }

    /**
     * 获取广告组ID的推广计划
     * @param $data
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getCampaignByAdGroupId($data)
    {
        return $this->baseRequest('campaign/getCampaignByAdGroupId', $data);
    }

    /**
     * 修改推广计划出价
     * @param $data
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function bidUpdate($data)
    {
        return $this->baseRequest('campaign/bid/update', $data);
    }

    /**
     * 根据指定计划ID更新推广计划的预算
     * @param $data
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function budgetUpdate($data)
    {
        return $this->baseRequest('campaign/budget/update ', $data);
    }

    /**
     * 更新推广计划开启/暂停状态
     * @param $data
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function pausedUpdate($data)
    {
        return $this->baseRequest('campaign/paused/update', $data);
    }


}