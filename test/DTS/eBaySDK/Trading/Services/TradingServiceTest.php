<?php

use DTS\eBaySDK\Trading\Services\TradingService;
use DTS\eBaySDK\HttpClient\HttpClient;

class TradingServiceTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new TradingService(new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingService', $this->obj);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingBaseService', $this->obj);
    }
}
