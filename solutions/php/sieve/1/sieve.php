<?php

function sieve($limit) {
    $p = 2;
    $numbers = [];

    for($i = $p; $i <= $limit; $i++) {
        if(!isset($numbers[$i])) {
            $numbers[$i] = true;

            for($x = $i+$i; $x <= $limit; $x+=$i) {
                $numbers[$x] = false;
            }
        }
    }

    $prime = array_filter($numbers, function ($value) {
        return $value == true;
    });
    
    return array_keys(array_map(function () { return null;}, $prime));
}