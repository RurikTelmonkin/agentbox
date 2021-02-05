<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\literalDates;

class literalDatesTest extends TestCase
{
    public function test_first_monday()
    {
        $this->assertEquals('2019-10-07', (new literalDates())->convertDateToDBFormat('The first Monday of October 2019'));
    }

    public function test_third_tuesday()
    {
        $this->assertEquals('2019-10-15', (new literalDates())->convertDateToDBFormat('The third Tuesday of October 2019'));
    }

    public function test_last_wednesday()
    {
        $this->assertEquals('2019-10-30', (new literalDates())->convertDateToDBFormat('The last Wednesday of October 2019'));
    }
}
