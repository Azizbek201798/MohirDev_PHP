<?php

    function Konfet(float $price){
        $i = 0.1;
        while ($i <= 1){
            echo "$i kg konfet = " . $i * $price . "$\n";
            $i += 0.1;
        }
    }

    Konfet(4.2);