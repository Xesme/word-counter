<?php
    require_once __DIR__."/../src/wordcount.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_equalWords()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "That";
            $sentence = "that";

            // Act
            $result = $test_RepeatCounter->wordEquality($word, $sentence);

            // Assert
            $this->assertEquals(true, $result);
        }

        function test_countRepeats()
        {
            // Arrange
            $test_RepeatCounter = new RepeatCounter;
            $word = "that";
            $sentence = "that is that";

            // Act
            $result = $test_RepeatCounter->countRepeats($word, $sentence);

            // Assert
            $this->assertEquals(2, $result);
        }
    }
?>
