<?php

    function Reverse(int $Number){
        $result = 0;
        while($Number > 0){
            $result = $result * 10 + $Number%10;
            $Number = (int)($Number / 10);
        }
        return $result;
    }
    
    echo Reverse(1234) . PHP_EOL;