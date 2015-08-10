<?php

    require_once "src/TitleCaseGenerator.php";

    class TitleCaseGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_makeTitleCase_oneWord()
        {
          $test_TitleCaseGenerator = new TitleCaseGenerator;
          $input = "beowulf";

          $result = $test_TitleCaseGenerator->makeTitleCase($input);

          $this->assertEquals("Beowulf", $result);
        }
    }
    
 ?>
