<?php

    require_once "src/FindReplace.php";

    class FindReplaceTest extends PHPUnit_Framework_TestCase
    {
        function test_replaceWord_one_char()
        {
            //Arrange
            $test_FindReplace = new FindReplace;
            $sentence = "a";
            $word_to_replace = "a";
            $replacement_word = "b";

            //Act
            $result = $test_FindReplace->replaceWord($sentence, $word_to_replace, $replacement_word);

            //Assert
            $this->assertEquals("b", $result);
        }

        function test_replaceWord_multi_char()
        {
            //Arrange
            $test_FindReplace = new FindReplace;
            $sentence = "an";
            $word_to_replace = "an";
            $replacement_word = "be";

            //Act
            $result = $test_FindReplace->replaceWord($sentence, $word_to_replace, $replacement_word);

            //Assert
            $this->assertEquals("be", $result);

        }

        function test_replaceLetterIn_MultiLetter()
        {
            //Arrange
            $test_FindReplace = new FindReplace;
            $sentence = "a b c";
            $word_to_replace = "a";
            $replacement_word = "z";

            //Act
            $result = $test_FindReplace->replaceWord($sentence, $word_to_replace, $replacement_word);

            //Assert
            $this->assertEquals("z b c", $result);

        }
    }

?>
