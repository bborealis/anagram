<?php

    require_once "src/AnagramGenerator.php";

    class AnagramGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_checkAnagram_oneLetterWord() {

            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_single = "a";
            $input_list = ["a"];

            //Act
            $result = $test_AnagramGenerator->checkAnagram($input_single, $input_list);

            //Assert
            $this->assertEquals(["a"], $result);
        }

        function test_checkAnagram_twoLetterWord() {

            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_single = "on";
            $input_list = ["no"];

            //Act
            $result = $test_AnagramGenerator->checkAnagram($input_single, $input_list);

            //Assert
            $this->assertEquals(["no"], $result);
        }

        function test_checkAnagram_twoLetterWordNoMatch() {

            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_single = "on";
            $input_list = ["sn"];

            //Act
            $result = $test_AnagramGenerator->checkAnagram($input_single, $input_list);

            //Assert
            $this->assertEquals([""], $result);
        }

        function test_checkAnagram_twoWordsMatch() {

            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_single = "are";
            $input_list = ["ear", "era"];

            //Act
            $result = $test_AnagramGenerator->checkAnagram($input_single, $input_list);

            //Assert
            $this->assertEquals(["ear", "era"], $result);
        }

        function test_checkAnagram_twoWordsNoMatch() {

            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_single = "are";
            $input_list = ["pot", "rat"];

            //Act
            $result = $test_AnagramGenerator->checkAnagram($input_single, $input_list);

            //Assert
            $this->assertEquals([""], $result);
        }

        function test_checkAnagram_twoWordsOneMatch() {

            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_single = "are";
            $input_list = ["pot", "era"];

            //Act
            $result = $test_AnagramGenerator->checkAnagram($input_single, $input_list);

            //Assert
            $this->assertEquals(["era"], $result);
        }

        function test_checkAnagram_complexWords() {

            //Arrange
            $test_AnagramGenerator = new AnagramGenerator;
            $input_single = "weasel";
            $input_list = ["selwea", "lewsae", "weasle", "chickens"];

            //Act
            $result = $test_AnagramGenerator->checkAnagram($input_single, $input_list);

            //Assert
            $this->assertEquals(["selwea", "lewsae", "weasle"], $result);
        }



    }


?>
