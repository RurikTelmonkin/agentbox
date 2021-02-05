<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\parseXML;

class parseXMLTest extends TestCase
{
    public function test_commercial()
    {
        $result = (new parseXML())->parse();
        $this->assertIsArray($result);
        $this->assertArrayHasKey('1P3115', $result);
        $this->assertEquals('commercial', $result['1P3115']);
    }

    public function test_rental()
    {
        $result = (new parseXML())->parse();
        $this->assertIsArray($result);
        $this->assertArrayHasKey('1P0118', $result);
        $this->assertEquals('rental', $result['1P0118']);
    }

    public function test_rural()
    {
        $result = (new parseXML())->parse();
        $this->assertIsArray($result);
        $this->assertArrayHasKey('1P0119', $result);
        $this->assertEquals('rural', $result['1P0119']);
    }

    public function test_business()
    {
        $result = (new parseXML())->parse();
        $this->assertIsArray($result);
        $this->assertArrayHasKey('1P0120', $result);
        $this->assertEquals('business', $result['1P0120']);
    }

    public function test_holiday_rental()
    {
        $result = (new parseXML())->parse();
        $this->assertIsArray($result);
        $this->assertArrayHasKey(2631096, $result);
        $this->assertEquals('holidayRental', $result[2631096]);
    }

    public function test_residential()
    {
        $result = (new parseXML())->parse();
        $this->assertIsArray($result);
        $this->assertArrayHasKey('1P0036', $result);
        $this->assertEquals('residential', $result['1P0036']);
    }
}
