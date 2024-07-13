<?php
    
    function Karra(int $N){
        $i = 1;
        while($N >= 1){
            echo "$N * $i = " . $N*$i . PHP_EOL;
            $N -= 1;
        }
    }

    Karra(5);


