<?php

use DTS\eBaySDK\Trading\Types\ShowPickupDropoffPreferences;

class ShowPickupDropoffPreferencesTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new ShowPickupDropoffPreferences();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Trading\Types\ShowPickupDropoffPreferences', $this->obj);
    }

    public function testExtendsBaseType()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\Types\BaseType', $this->obj);
    }
}
