<?php

    require_once "src/PingPong.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_printNumbers()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 5;
            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);
            //Assert
            $this->assertEquals("1 2 3 4 5", $result);
        }
    }

 ?>
