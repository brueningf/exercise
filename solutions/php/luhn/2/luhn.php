<?php

function isValid($number) {
    $number = preg_replace('/\s+/', '', $number);

    if(strlen($number) <= 1 || !is_numeric($number)) {
        return false;
    }

    $array = str_split($number, 1);
    $index = $array[0] == 0 ? 1 : 0;
    $arrayLength = count($array);

    for ($i = $index; $i < $arrayLength; $i+=2) {
        $array[$i] = ($array[$i] * 2) > 9 ? ($array[$i] * 2) - 9 : $array[$i] * 2;     
    }

    return array_sum($array) % 10 == 0;

}
