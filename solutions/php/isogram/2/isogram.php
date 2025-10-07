<?php

function isIsogram($str)
{
    $arr = preg_split('//u', mb_strtolower(preg_replace('/\s+|\-/', '', $str)), -1, PREG_SPLIT_NO_EMPTY);

    return count(array_unique($arr)) === count($arr);
}
