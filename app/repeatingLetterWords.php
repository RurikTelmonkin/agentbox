<?php

namespace App;

class repeatingLetterWords
{
    function validateWordForRepeatingLetters($word) {
        $letters = str_split($word);
        $distinctLetters = array_unique($letters);

        return count($letters) == count($distinctLetters);
    }
}
