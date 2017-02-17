<?php

    class RepeatCounter
    {
        private $word;
        private $sentence;

        function __construct($word, $sentence)
        {
            $this->word = $word;
            $this->sentence = $sentence;
        }

        // getters and setters

        function getWord()
        {
            return $this->word;
        }

        function setWord($word)
        {
            $this->word = (string) $word;
        }

        function getSentence()
        {
            return $this->sentence;
        }

        function setSentence($sentence)
        {
            $this->sentence = (string) $sentence;
        }

        // Functions

        // function wordEquality($word, $sentence)
        // {
        // $word = strtolower($word);
        // $sentence = strtolower($sentence);
        //     if ($word === $sentence)
        //     {
        //         return true;
        //     } else {
        //         return false;
        //     }
        // }

        function countRepeats($word, $sentence)
        {
            $word = strtolower($word);
            $sentence = strtolower($sentence);

            $array_sentence = explode(" ", $sentence);
            $counter = 0;

            for ($i = 0; $i <= count($array_sentence); $i++)
            {
                if ($word === $array_sentence[$i])
                    $counter ++;
                }
                return $counter;
            }
        }

?>
