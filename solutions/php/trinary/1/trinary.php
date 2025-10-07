<?php

function toDecimal($value) {
    
    $valueArr = array_reverse(str_split((string) $value));
    $decimalValue = 0;

    if(preg_match('/[3-9]/', $value)) return $decimalValue;

    foreach($valueArr as $key => $value) {
        $decimalValue += ($value * pow(3, $key));
    }

    return $decimalValue;
}