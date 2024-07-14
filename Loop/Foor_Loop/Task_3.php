<?php
    
    $N = 10; 
    $result = 1; 

    for ($i = 1; $i <= $N; $i++) {
        $result *= $i;
    }

    echo "Sonlar ko'paymasi: " . $result;
