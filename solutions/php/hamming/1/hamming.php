<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{
    if (isMutated($a, $b) && hasSameLength($a, $b)) {
        return calculateDistance($a, $b);
    }
    
}

function isMutated($a, $b)
{
    if($a !== $b) {
        return true;
    }
}

function hasSameLength($a, $b)
{
    if (strlen($a) != strlen($b)) {
        throw new InvalidArgumentException('DNA strands must be of equal length.');
    }
    return true;
}

function calculateDistance($a, $b) 
{
    $distance = 0; 
    for ($i=0; $i < strlen($a); $i++) { 
        $aPoint = substr($a, $i, 1);
        $bPoint = substr($b, $i, 1);
        if ($aPoint !== $bPoint) {
            $distance++;
        }
    }
    return $distance;
}