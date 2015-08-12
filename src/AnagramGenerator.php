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
            $exploded_list = str_split($input_list);
            sort($exploded_list);


            if ($exploded_single === $exploded_list) {
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
                $output = "";
            }

            return $output;

        }
    }


?>
