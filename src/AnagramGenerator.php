<?php

    class AnagramGenerator
    {
        function checkAnagram($input_single, $input_list)
        {
            $output = array();
            $singleArray = array();
            $inputArray = array();
            if ($input_single === $input_list) {
                $output = $input_list;
            }
            // if ($input_single != $input_list) {
            //     $singleArray = str_split($input_single);
            //     $inputArray = str_split($input_list);
            //     $outputArray = array_diff ($singleArray, $inputArray);
            //     if($outputArray != $input_single){
            //         $output = '';
            //     }
            //
            // }

             else {
                $output = $input_list;
            }

            return $output;

        }
    }


?>
