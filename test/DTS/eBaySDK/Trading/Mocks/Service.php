<?php
namespace DTS\eBaySDK\Trading\Mocks;

class Service extends \DTS\eBaySDK\Trading\Services\TradingBaseService
{
    public function __construct(\DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient, $config = array())
    {
        parent::__construct($httpClient, $config);
    }

    public function testOperation()
    {
        return $this->callOperation('testOperation', '');    
    }
}
