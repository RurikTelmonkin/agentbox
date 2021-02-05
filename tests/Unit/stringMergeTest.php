<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\stringMerge;

class stringMergeTest extends TestCase
{
    public function test_michael_jordan()
    {
        $this->assertEquals('MJIOCRHDAAENL', (new stringMerge())->mergeStrings('MICHAEL', 'JORDAN'));
    }

    public function test_hello_world()
    {
        $this->assertEquals('HWeolrllod', (new stringMerge())->mergeStrings('Hello', 'World'));
    }

    public function test_long_first_string()
    {
        $this->assertEquals('Slhoonrgter', (new stringMerge())->mergeStrings('Shorter', 'long'));
    }

    public function test_long_second_string()
    {
        $this->assertEquals('lSohnogrter', (new stringMerge())->mergeStrings('long', 'Shorter'));
    }
}
