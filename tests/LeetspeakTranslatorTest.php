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
    }
?>
