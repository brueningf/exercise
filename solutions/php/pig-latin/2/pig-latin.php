<?php

/** Pig Latin Translator */
function translate(string $text) {
    $words = explode(' ', $text);

    foreach($words as &$word) {
        preg_match("/a|e|i|o|(?<!q)u|yt|xr/", $word, $matches, PREG_OFFSET_CAPTURE);
        $firstVowelPosition = $matches[0][1];
    
        if( $firstVowelPosition == 0 )  {
            $word = "{$text}ay";
            continue;
        } 
        
        $word = substr($word, $firstVowelPosition) . substr($word, 0, $firstVowelPosition) . "ay";
    }

    return implode(' ', $words);
}