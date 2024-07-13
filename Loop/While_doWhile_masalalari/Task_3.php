<?php

    $result = 1;
    $N = 5;
    $old = $N;
    while ($N > 0){
        $result *= $N;
        $N -= 1;
    }

    echo "$old! = " . $result . PHP_EOL;