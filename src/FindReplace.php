<?php

    class FindReplace
    {
        function replaceWord($sentence, $word_to_replace, $replacement_word)
        {

            $split_sentence = explode(" ",$sentence);

            $output = array();

            foreach ($split_sentence as $split) {
                if ($word_to_replace == $split) {
                    array_push($output, $replacement_word);
                } else {
                    array_push($output, $split);
                }
            }

            return implode(" ", $output);


        }


    }

?>
