<?php

function difference($number) {
    return squareOfSum($number) - sumOfSquares($number);
}

function squareOfSum($number){
    $sum = 0;

    for($i = 1; $i <= $number; $i++) {
        $sum = $sum + $i;
    }

    return $sum * $sum;
}

function sumOfSquares($number) {
    $sum = 0;

    for($i = 1; $i <= $number; $i++) {
        $sum = $sum + ($i*$i);
    }

    return $sum;
}