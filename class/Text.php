<?php

namespace App;

class Text{
    
    #text encoding
    public static function transform($text) {

    $words = explode(' ', $text);
    $scrambledText = '';
        foreach ($words as $word) {
            if (mb_strlen($word,'UTF-8') <= 3) {
                $scrambledText .= $word . ' ';
            } else {
                $firstLetter = mb_substr($word, 0, 1,'UTF-8');
                $lastLetter = mb_substr($word, -1,1,'UTF-8');
                $middleLetters = str_shuffle(mb_substr($word, 1, -1,'UTF-8'));
                $middleLetters = preg_replace('/\PL/u', '', $middleLetters);
                $scrambledWord = $firstLetter . $middleLetters . $lastLetter;
                $scrambledText .= $scrambledWord . ' ';
            }
        }
        
        return trim($scrambledText);
        
    }
    #reverse transform text
    public static function revtransform($word) {

        $length = strlen($word);
        if ($length <= 3) {
            return $word; // do not unscramble short words
        }
        $first = $word[0];
        $last = $word[$length-1];
        $middle = substr($word, 1, $length-2);
        $unscrambledMiddle = '';
        $middleLength = strlen($middle);
        $middleIndex = 0;
        for ($i = 0; $i < $middleLength; $i++) {
            if ($middle[$i] == '') {
                $unscrambledMiddle .= '';
            } else {
                $unscrambledMiddle .= $middle[$middleIndex++];
            }
        }
        return $first . $unscrambledMiddle . $last;
    }
    
}
