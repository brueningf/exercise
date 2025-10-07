<?php

function difference(int $number) : int
{
    return squareOfSum($number) - sumOfSquares($number);
}

function squareOfSum(int $number) : int
{
    return array_sum(range(1, $number)) ** 2;
}

function sumOfSquares(int $number) : int
{
    return array_sum(array_map(function ($position) {
        return $position ** 2;
    }, range(1, $number)));
}
