<?php

    class AnagramGenerator
    {
        function checkAnagram($input_single, $input_list)
        {
            $output = '';
            if ($input_single === $input_list) {
                $output = $input_list;
            }
//            if ($input_single != $input_list) {
//                $singleArray = array();
//                $inputArray = array();
//                $singleArray = str_split($input_single);
//                $inputArray = str_split($input_list);
//                if ($singleArray == $inputArray) {
//                    $output = '';
//                }
//            } 
            else {
                $output = $input_list;
            }

            return $output;

        }
    }


?>
