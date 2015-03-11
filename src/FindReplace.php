<?php

    class FindReplace
    {

        function replaceWord($sentence, $word_to_replace, $replacement_word)
        {

            return preg_replace("/".$word_to_replace."/", $replacement_word, $sentence);

        }


    }

?>
