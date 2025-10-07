<?php

function translate($text) {
    $words = explode(' ', $text);
    $translatedString = '';

    foreach($words as $word) {
        preg_match("/a|e|i|o|(?<!q)u|yt|xr/", $word, $matches, PREG_OFFSET_CAPTURE);
        $firstVowelPosition = $matches[0][1];
    
        if( $firstVowelPosition == 0 )  {
            $translatedString .= $text . "ay ";
        } else {
            $translatedString .= substr($word, $firstVowelPosition) . substr($word, 0, $firstVowelPosition) . "ay ";
        }
    }

    return rtrim($translatedString, ' ');
}