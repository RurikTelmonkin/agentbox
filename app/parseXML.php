<?php

namespace App;

class parseXML
{
    function parse() {
        $xml = simplexml_load_file('app/sample-reaxml.xml');

        $xmlArray = json_decode(json_encode($xml), true);

        $returnArray = [];
        foreach (array_keys($xmlArray) as $propertyType) {
            if ($propertyType == '@attributes') {
                continue;
            }
            if (array_keys($xmlArray[$propertyType]) === range(0, count($xmlArray[$propertyType]) - 1)) {
                foreach ($xmlArray[$propertyType] as $index => $property) {
                    if (isset($property['uniqueID'])) {
                        $returnArray[$property['uniqueID']] = $propertyType;
                    }
                }
            } else {
                if (isset($xmlArray[$propertyType]['uniqueID'])) {
                    $returnArray[$xmlArray[$propertyType]['uniqueID']] = $propertyType;
                }
            }

        }

        return $returnArray;
    }
}
