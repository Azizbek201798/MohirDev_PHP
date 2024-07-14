<?php
    
    $number = 187654321; 
    
    $firstDigit = $number % 10; 
    $lastDigit = $number;
    
    while ($lastDigit >= 10) {
        $lastDigit = $lastDigit / 10; 
    }
    
    $lastDigit = (int)$lastDigit; 
    $sum = $firstDigit + $lastDigit; 
    echo "1-va va oxirgi raqamlar yig'indisi: " . $sum . PHP_EOL;

