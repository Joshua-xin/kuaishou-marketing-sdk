<?php


namespace CloudyCity\KuaishouMarketingSDK\Advertiser;


use CloudyCity\KuaishouMarketingSDK\Kernel\BaseClient;

class Client extends BaseClient
{
    /**
     * 获取广告账户信息
     *
     * @link https://yiqixie.com/d/home/fcAB8NFoHn82gbNSTAM4rU2re
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getInfo()
    {
        return $this->httpGetJson('v1/advertiser/info');
    }

    /**
     * 获取广告账户余额信息
     *
     * @link https://yiqixie.com/d/home/fcAB8NFoHn82gbNSTAM4rU2re
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getFunds()
    {
        return $this->httpGetJson('v1/advertiser/fund/get');
    }

    /**
     * 获取广告账户余额信息
     *
     * @link https://yiqixie.com/d/home/fcAB8NFoHn82gbNSTAM4rU2re
     * @param array $params
     * @return array|\CloudyCity\KuaishouMarketingSDK\Kernel\Support\Collection|object|\Psr\Http\Message\ResponseInterface|string
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\ApiException
     * @throws \CloudyCity\KuaishouMarketingSDK\Kernel\Exceptions\InvalidArgumentException
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getFlows(array $params)
    {
        return $this->httpGetJson('v1/advertiser/fund/daily_flows', $params);
    }
}