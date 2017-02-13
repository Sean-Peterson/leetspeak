<?php
    class LeetspeakTranslator
    {
        function translator($input)
        {
            $exploded = str_split($input);
            $newWord = array();
            foreach ($exploded as $key => $character){
                $push_letter = $character;
                if ($character == 'e' || $character == 'E'){
                    $push_letter = '3';
                } elseif ($character == 'o' || $character == 'O') {
                    $push_letter = '0';
                } elseif ($character == 'I') {
                    $push_letter = '1';
                } elseif (($character == 's' || $character == 'S') && $exploded[$key - 1] != " ") {
                    $push_letter = 'z';
                }
                array_push($newWord, $push_letter);
            }

            return implode($newWord);
        }
    }

?>
