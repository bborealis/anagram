<?php

    class AnagramGenerator
    {
        function checkAnagram($input_single, $input_list)
        {
            $output = array();
            $singleArray = array();
            $inputArray = array();
            $exploded_single = str_split($input_single);
            sort($exploded_single);

            foreach ($input_list as $word) {
                $exploded_word = str_split($word);
                sort($exploded_word);
                if ($exploded_single === $exploded_word) {
                    array_push($output, $word);
                }
            }

            if ($output == array()) {
                array_push($output, "");
            }

            return $output;

        }
    }


?>
