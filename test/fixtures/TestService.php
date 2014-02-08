<?php

use DTS\eBaySDK\Trading\Services\TradingBaseService;

class TestService extends TradingBaseService
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
