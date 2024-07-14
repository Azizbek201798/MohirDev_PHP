<?php

    $N = 1; 
    $M = 20;
    $sum = 0; 
    
    for ($i = $N; $i <= $M; $i++) {
        if ($i % 4 === 0) {
            $sum += $i;
        }
    }
    
    echo "4 ga karrali sonlar yig'indisi: " . $sum . PHP_EOL;
