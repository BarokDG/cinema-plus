<?php

class CinemaPlusSanitizer { 
    // Define Sanitizer Function here
    function sanitize_entry($input) {
        $offensiveWords = ['shit', 'fuck', 'faggot', 'nigger', 'negro', 'bitch', 'nigga', 'beech'];
        $result;
        foreach ($offensiveWords as $offWord) {
            if (str_contains($input, $offWord)) {
                $grawlix = str_repeat('*', strlen($offWord));
                $result = str_replace($offWord, $grawlix, $input);
            }
        }
    
        return $result;
    }
}

?>