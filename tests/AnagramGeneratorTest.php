<?php

    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_checkAnagram_oneLetterWord() {

            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_single = "a";
            $input_list = "a";

            //Act
            $result = $test_AnagramGenerator->checkAnagram($input_single, $input_list);

            //Assert
            $this->assertEquals("a", $result);
        }

        function test_checkAnagram_twoLetterWord() {

            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_single = "on";
            $input_list = "no";

            //Act
            $result = $test_AnagramGenerator->checkAnagram($input_single, $input_list);

            //Assert
            $this->assertEquals("no", $result);
        }

        function test_checkAnagram_twoLetterWord_noMatch() {

            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_single = "on";
            $input_list = "sn";

            //Act
            $result = $test_AnagramGenerator->checkAnagram($input_single, $input_list);

            //Assert
            $this->assertEquals("", $result);
        }




    }


?>
