<?php

namespace App;

class stringMerge
{
    function mergeStrings($string1, $string2) {
        $string1Array = str_split($string1);
        $string2Array = str_split($string2);

        $minLength = min(count($string1Array), count($string2Array));

        $mergedString = '';
        for ($i = 0; $i < $minLength; $i++) {
            $mergedString .= $string1Array[$i] . $string2Array[$i];
        }

        $string1Index = $string2Index = $i;

        while ($string1Index < count($string1Array)) {
            $mergedString .= $string1Array[$string1Index];
            $string1Index++;
        }

        while ($string2Index < count($string2Array)) {
            $mergedString .= $string2Array[$string2Index];
            $string2Index++;
        }
        return $mergedString;
    }
}
