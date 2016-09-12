<?php

    require_once "src/PingPong.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {
        function test_printNumbers()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 2;
            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);
            //Assert
            $this->assertEquals("1 2", $result);
        }

        function test_Ping()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;
            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);
            //Assert
            $this->assertEquals("1 2 Ping", $result);
        }

        function test_Pong()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 5;
            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);
            //Assert
            $this->assertEquals("1 2 Ping 4 Pong", $result);
        }

        function test_PingPong()
        {
            //Arrange
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 15;
            //Act
            $result = $test_PingPongGenerator->generatePingPongArray($input);
            //Assert
            $this->assertEquals("1 2 Ping 4 Pong Ping 7 8 Ping Pong 11 Ping 13 14 Ping-Pong", $result);
        }

    }

 ?>
