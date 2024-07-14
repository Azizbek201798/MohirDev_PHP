<?php

    $N = 5; 
    $sum = 0;
    $number = 1;

    for ($i = 1; $i <= $N; $i++) {
        $sum += $number;
        $number = $number * 10 + 1;
    }

    echo "Yig'indi: " . $sum .PHP_EOL;
