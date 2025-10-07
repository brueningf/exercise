<?php

class Bob {
    function respondTo($message)
    {
        $whitespace = [' ', '\p', '\t', '\n', '\r', '\0', '\x0B', '\u000b', '\u00a0', '\u2002'];
        if( strlen(str_replace($whitespace, '',trim($message)) ) == 0) {
            return 'Fine. Be that way!';
        }
        $elementsToReplace = [' ', '!', '?', ',', '1','2','3', '%', '^','*','@','#','$','(','*','^', '"'];
        if( ctype_upper(str_replace($elementsToReplace,'',iconv("utf-8","ascii//TRANSLIT",$message))) ) {
            return 'Whoa, chill out!';
        }
        if (strpos(trim($message), '?', -1)) {
            return 'Sure.';
        }
        return 'Whatever.';
    }
}