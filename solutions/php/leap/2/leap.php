<?php

/** Leap Year Validator */
function isLeap(int $year) {
    return ((bool)!($year % 4)) && (bool)!($year % 100) && (bool)($year % 400);
}
