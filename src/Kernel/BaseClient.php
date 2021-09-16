<?php


namespace App\Third\Kernel;


use GuzzleHttp\Client;

class BaseClient
{
    protected $config;

    protected $url = "https://e.uc.cn/shc/api/";

    protected $method = "POST";

    public function __construct(array $config = [])
    {
        $this->config = $config;
    }

    /**
     * @param $url
     * @param $data
     * @return mixed
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function baseRequest($url, $data = [])
    {
        $query = [
            'headers' => [
                $this->config
            ],
            'json'    => $data,
            'timeout' => 40
        ];
        $client = new Client();
        $response = $client->request($this->method, $this->url . $url, $query);
        return json_decode($response->getBody()->getContents(), true);
    }
}