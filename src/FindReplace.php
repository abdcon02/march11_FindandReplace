<?php

    class FindReplace
    {

        function replaceWord($sentence, $word_to_replace, $replacement_word)
        {
            // $sent_lower = strtolower($sentence);
            // $repl_lower = strtolower($word_to_replace);
            // $word_lower = strtolower($replacement_word);
            //
            // I WanT to kNOW how my CaT is doing today.
            // lower case everything
            // check if lower case thing is in array
            // if true, replace lower case word with HAUNT

            // return preg_replace("/".$word_to_replace."/", $replacement_word, $sentence);
            return str_replace($word_to_replace, $replacement_word, $sentence);
        }


    }

?>
