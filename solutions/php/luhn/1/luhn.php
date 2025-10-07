<?php

function isValid($number) {
    $number = preg_replace('/\s+/', '', $number);

    if(strlen($number) > 1 && is_numeric($number)) {
        $arr = str_split($number, 1);
        $index = $arr[0] == 0 ? 1 : 0;
        
        for ($i = $index; $i < count($arr); $i+=2) {
            $arr[$i] = ($arr[$i] * 2) > 9 ? ($arr[$i] * 2) - 9 : $arr[$i] * 2;     
        }

        return array_sum($arr) % 10 == 0;
    }

    return false;
}
