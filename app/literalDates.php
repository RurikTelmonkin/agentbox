<?php

namespace App;

class literalDates
{
    function convertDateToDBFormat($date) {
        $timestamp = strtotime($date);
        if (!$timestamp && substr(strtolower($date), 0, 4) == "the ") {
            $date = substr($date, 4);
            $timestamp = strtotime($date);
        }
        return date('Y-m-d', $timestamp);
    }
}
