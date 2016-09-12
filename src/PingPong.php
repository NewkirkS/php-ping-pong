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
                } elseif (($input_number % 3) == 0) {
                    array_push($list, "Ping");
                    --$input_number;
                } elseif (($input_number % 5) == 0) {
                    array_push($list, "Pong");
                    --$input_number;
                } else {
                array_push($list, $input_number);
                --$input_number;
                }
            }
            // *FOR TEST ONLY* return implode(" ", array_reverse($list));
            return array_reverse($list);
        }
    }
 ?>
