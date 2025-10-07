<?php

function from($date)
{
    $immutable = DateTimeImmutable::createFromMutable($date);
    $date = $immutable->add(new DateInterval('PT1000000000S'));
    return $date;
}