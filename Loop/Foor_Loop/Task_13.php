<?php

    $eni = 5;
    $boyi = 7;
    
    for ($row = 1; $row <= $boyi; $row++) {
        for ($col = 1; $col <= $eni; $col++) {
            if ($col == ($eni / 2 + 0.5) || $row == 1 || $row == $boyi) {
                echo "*";
            } else {
                echo " ";
            }
        }
        echo "\n";
    }