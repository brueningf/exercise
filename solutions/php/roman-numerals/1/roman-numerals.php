<?php

function toRoman($number)
{
    $length = strlen($number);

    $replace_pairs = [
        '1' => 'I',
        '2' => 'II',
        '3' => 'III', 
        '4' => 'IV', 
        '5' => 'V', 
        '6' => 'VI',
        '7' => 'VII',
        '8' => 'VIII',
        '9' => 'IX',
        '0' => ''
    ];

    $two_digit_replace_pairs = [
        '1' => 'X',
        '2' => 'XX',
        '3' => 'XXX', 
        '4' => 'XL', 
        '5' => 'L', 
        '6' => 'LX',
        '7' => 'LXX',
        '8' => 'LXXX',
        '9' => 'XC',
        '0' => ''
    ];

    $three_digit_replace_pairs = [
        '1' => 'C',
        '2' => 'CC',
        '3' => 'CCC', 
        '4' => 'CD', 
        '5' => 'D', 
        '6' => 'DC',
        '7' => 'DCC',
        '8' => 'DCCC',
        '9' => 'CM',
        '0' => ''
    ];

    $four_digit_replace_pairs = [
        '1' => 'M',
        '2' => 'MM',
        '3' => 'MMM',  
        '0' => ''
    ];

    if($length === 1) {
        return strtr($number, $replace_pairs);
    } else if($length === 2) {
        $firstChar = substr($number, 0, 1);
        $otherChars = substr($number, 1);

        $newFirstChar = strtr($firstChar, $two_digit_replace_pairs);
        $newOtherChars = strtr($otherChars, $replace_pairs);

        return $newFirstChar . $newOtherChars;
    } else if($length === 3) {
        $firstChar = substr($number, 0, 1);
        $secondChar = substr($number, 1, 1);
        $otherChars = substr($number, 2);

        $newFirstChar = strtr($firstChar, $three_digit_replace_pairs);
        $newSecondChar = strtr($secondChar, $two_digit_replace_pairs);
        $newOtherChars = strtr($otherChars, $replace_pairs);

        return $newFirstChar . $newSecondChar . $newOtherChars;
    } else if($length > 3) {
        $firstChar = substr($number, 0, 1);
        $secondChar = substr($number, 1, 1);
        $thirdChar = substr($number, 2, 1);
        $otherChars = substr($number, 3);

        $newFirstChar = strtr($firstChar, $four_digit_replace_pairs);
        $newSecondChar = strtr($secondChar, $three_digit_replace_pairs);
        $newThirdChar = strtr($thirdChar, $two_digit_replace_pairs);
        $newOtherChars = strtr($otherChars, $replace_pairs);

        return $newFirstChar . $newSecondChar .  $newThirdChar . $newOtherChars;
    }
}
