<?php

/** Count word ocurrences */
function wordCount(string $phrase) {
    // Remove all symbols, replace tabs and newlines with spaces, whole phrase to lower case
    $phrase = preg_replace('/[^A-Za-z0-9\ ]/', '', 
                    preg_replace('/[\r?\n\s]/', ' ', 
                        strtolower($phrase)
                    )
                );

    // explode the phrase into an array without empty elements
    return array_count_values(preg_split('/[\ ]/', $phrase, NULL, PREG_SPLIT_NO_EMPTY));
}