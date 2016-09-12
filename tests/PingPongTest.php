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
            $this->assertEquals("1 2 Ping 4 5", $result);
        }

        function test_PingPong()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 15;
            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);
            //Assert
            $this->assertEquals("1 2 Ping 4 5 Ping 7 8 Ping 10 11 Ping 13 14 Ping-Pong", $result);
        }

        function test_Ping()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;
            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);
            //Assert
            $this->assertEquals("1 2 Ping", $result);
        }
    }

 ?>
