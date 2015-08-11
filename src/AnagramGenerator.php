<?php

    class AnagramGenerator
    {
        function checkAnagram($input_single, $input_list)
        {
            $output = '';
            if ($input_single === $input_list) {
                $output = $input_list;
            }
            return $output;

        }
    }


?>
