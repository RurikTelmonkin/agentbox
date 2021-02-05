<?php

namespace App;

class superDigit
{
    function superDigit($number) {
        $numbers = str_split($number);

        while (count($numbers) > 1) {
            $number = array_sum($numbers);
            $numbers = str_split($number);
        }

        return $numbers[0];
    }
}
