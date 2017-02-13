<?php
    require_once 'src/LeetspeakTranslator.php';

    class LeetspeakTranslatorTest extends PHPUnit_Framework_TestCase
    {
        function test_switchEToThree()
        {
            //arrange
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "the";

            //act
            $result = $test_LeetspeakTranslator->translator($input);

            //assert
            $this->assertEquals("th3", $result);
        }

        function test_switchOToZero()
        {
            //arrange
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "doe";

            //act
            $result = $test_LeetspeakTranslator->translator($input);

            //assert
            $this->assertEquals("d03", $result);
        }

        function test_multipleWords()
        {
            //arrange
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "the doe";

            //act
            $result = $test_LeetspeakTranslator->translator($input);

            //assert
            $this->assertEquals("th3 d03", $result);
        }

        function test_switchIToOne()
        {
            //arrange
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "Ian the doe";

            //act
            $result = $test_LeetspeakTranslator->translator($input);

            //assert
            $this->assertEquals("1an th3 d03", $result);
        }

        function test_switchSToZ()
        {
            //arrange
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "Inside the loop";

            //act
            $result = $test_LeetspeakTranslator->translator($input);

            //assert
            $this->assertEquals("1nzid3 th3 l00p", $result);
        }

        function test_switchNotFirstS()
        {
            //arrange
            $test_LeetspeakTranslator = new LeetspeakTranslator;
            $input = "Sean slams IPA's like an ogre";

            //act
            $result = $test_LeetspeakTranslator->translator($input);

            //assert
            $this->assertEquals("S3an slamz 1PA'z lik3 an 0gr3", $result);
        }

    }
?>
