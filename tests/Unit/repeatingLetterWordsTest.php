<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class repeatingLetterWordsTest extends TestCase
{
    public function test_aftershock()
    {
        $this->assertTrue((new \App\repeatingLetterWords())->validateWordForRepeatingLetters('aftershock'));
    }

    public function test_documentarily()
    {
        $this->assertTrue((new \App\repeatingLetterWords())->validateWordForRepeatingLetters('documentarily'));
    }

    public function test_countryside()
    {
        $this->assertTrue((new \App\repeatingLetterWords())->validateWordForRepeatingLetters('countryside'));
    }

    public function test_six_year_old()
    {
        $this->assertTrue((new \App\repeatingLetterWords())->validateWordForRepeatingLetters('six-year-old'));
    }

    public function test_euclidean()
    {
        $this->assertFalse((new \App\repeatingLetterWords())->validateWordForRepeatingLetters('euclidean'));
    }

    public function test_Double_down()
    {
        $this->assertFalse((new \App\repeatingLetterWords())->validateWordForRepeatingLetters('Double-down'));
    }

    public function test_epidemic()
    {
        $this->assertFalse((new \App\repeatingLetterWords())->validateWordForRepeatingLetters('epidemic'));
    }
}
