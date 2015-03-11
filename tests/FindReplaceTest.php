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

        function test_replace_wordInMultiWord()
        {
            //Arrange
            $test_FindReplace = new FindReplace;
            $sentence = "be he ho";
            $word_to_replace = "be";
            $replacement_word = "ho";

            //Act
            $result = $test_FindReplace->replaceWord($sentence, $word_to_replace, $replacement_word);

            //Assert
            $this->assertEquals("ho he ho", $result);

        }

        function test_replace_wordInMultiWord_WithPunctuation()
        {
            //Arrange
            $test_FindReplace = new FindReplace;
            $sentence = "be, he ho.";
            $word_to_replace = "be";
            $replacement_word = "ho";

            //Act
            $result = $test_FindReplace->replaceWord($sentence, $word_to_replace, $replacement_word);

            //Assert
            $this->assertEquals("ho, he ho.", $result);

        }

        function test_replace_PartialwordInMultiWord_WithPunctuation()
        {
            //Arrange
            $test_FindReplace = new FindReplace;
            $sentence = "Hello there.  How are you?";
            $word_to_replace = "llo";
            $replacement_word = "ck";

            //Act
            $result = $test_FindReplace->replaceWord($sentence, $word_to_replace, $replacement_word);

            //Assert
            $this->assertEquals("Heck there.  How are you?", $result);

        }

    }

?>
