<?php

    $M = 1;
    $N = 20; 
    $count = 0; 

    for ($i = $M; $i <= $N; $i++) {
        if ($i % 2 === 0) {
            $count++;
        }
    }

    echo "Juft sonlar soni: " . $count;