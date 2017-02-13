<?php
    class LeetspeakTranslator
    {
        function translator($input)
        {
            $exploded = str_split($input);
            $newWord = array();
            foreach ($exploded as $character){
                $push_letter = $character;
                if ($character == 'e' || $character == 'E'){
                     $push_letter = '3';
                }
                if ($character == 'o' || $character == 'O') {
                    $push_letter = '0';
                }
                array_push($newWord, $push_letter);
            }

            return implode($newWord);
        }
    }

?>
