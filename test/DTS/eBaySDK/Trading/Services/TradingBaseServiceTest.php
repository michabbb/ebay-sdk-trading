<?php
/**
 * THE CODE IN THIS FILE WAS GENERATED FROM THE EBAY WSDL USING THE PROJECT:
 *
 * https://github.com/davidtsadler/ebay-api-sdk-php
 *
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Trading\Services\Test;

use DTS\eBaySDK\Trading\Services\TradingBaseService;
use DTS\eBaySDK\Mocks\HttpClient;

class TradingBaseServiceTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->service1 = new TradingBaseService();
        $this->service2 = new TradingBaseService(array());
        $this->service3 = new TradingBaseService(array(), new HttpClient());
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingBaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingBaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Services\TradingBaseService', $this->service3);
    }

    public function testExtendsBaseService()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service1);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service2);
        $this->assertInstanceOf('\DTS\eBaySDK\Services\BaseService', $this->service3);
    }
}
