<?php

    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_checkAnagram_twoLetterWord() {

            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_single = "no";
            $input_list = "on";


            //Act
            $result = $test_AnagramGenerator->checkAnagram($input_single, $input_list);

            //Assert
            $this->assertEquals("on", $result);
        }


    }


?>
