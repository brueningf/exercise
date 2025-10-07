<?php

function isIsogram($string) {
    $string = strtolower(preg_replace('/\s+|\-/', '', $string));
    $length = mb_strlen($string, 'UTF-8');
    $array = [];

    for ($i = 0; $i < $length; $i++) {
        $array[] = mb_substr($string, $i, 1, 'UTF-8');
    }

    return count(array_unique($array)) === count($array);
}