<?php

namespace App;

class repeatingLetterWords
{
    function validateWordForRepeatingLetters($word) {
        $word = strtolower(preg_replace('/[^a-zA-Z]/', '', $word));
        $letters = str_split($word);
        $distinctLetters = array_unique($letters);

        return count($letters) == count($distinctLetters);
    }
}
