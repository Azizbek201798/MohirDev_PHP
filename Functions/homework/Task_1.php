<?php

function Factorial(int $N, $result = 1) {
    if ($N <= 1) {
        return $result;
    } else {
        $result *= $N;
        return Factorial($N - 1, $result);
    }
}

echo Factorial(5);