<?php

function toRna($DNA)
{
    $replace_pairs = ['G' => 'C', 'C' => 'G', 'T' => 'A', 'A' => 'U']; 

    return strtr($DNA, $replace_pairs);
}
