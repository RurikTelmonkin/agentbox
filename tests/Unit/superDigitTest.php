<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\superDigit;

class superDigitTest extends TestCase
{
    public function test_four()
    {
        $this->assertEquals(4, (new superDigit())->superDigit(4));
    }

    public function test_eighteen()
    {
        $this->assertEquals(9, (new superDigit())->superDigit(18));
    }

    public function test_two_hundred_fifty_eight()
    {
        $this->assertEquals(6, (new superDigit())->superDigit(258));
    }
}
