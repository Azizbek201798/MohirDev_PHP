<?php

    function Sum_of_digits(int $N){
        $sum = 0;
        while($N > 0){
            $sum += $N % 10;
            $N = (int)($N / 10);
        }

        echo "Raqamlari yig'indisi : " . $sum . "\n";
    }

    Sum_of_digits(123456789);
    