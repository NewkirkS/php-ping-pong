<?php

    class PingPongGenerator
    {
        function generatePingPongArray($input)
        {
            $input_number = $input;
            $list = array();
            while ($input_number > 0) {
                if (($input_number % 15) == 0) {
                    array_push($list, "Ping-Pong");
                    --$input_number;
                } else {
                array_push($list, $input_number);
                --$input_number;
                }
            }
            return implode(" ", array_reverse($list));
        }
    }
 ?>
