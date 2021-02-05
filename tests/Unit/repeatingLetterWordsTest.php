<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class repeatingLetterWordsTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_aftershock()
    {
        $this->assertTrue((new \App\repeatingLetterWords())->validateWordForRepeatingLetters('aftershock'));
    }

    public function test_euclidean()
    {
        $this->assertFalse((new \App\repeatingLetterWords())->validateWordForRepeatingLetters('euclidean'));
    }
}
