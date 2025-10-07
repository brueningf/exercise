<?php

/** Count word ocurrences */
function wordCount(string $phrase) {
    // Remove all symbols, replace tabs and newlines with spaces, whole phrase to lower case
    $phrase = preg_replace('/[^A-Za-z0-9\ ]/', '', 
                    preg_replace('/[\r?\n\s]/', ' ', 
                        strtolower($phrase)
                    )
                );
                
    // remove empty array elements, explode the phrase into an array 
    $array = array_filter(explode(' ', $phrase));

    return array_count_values($array);
}