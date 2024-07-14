<?php

    $umumiy = 100;
    $uchlik_soni = 0;
    $tortlik_soni = 0;
    $uchlik = 3;
    $tortlik = 4;

    while(1){
        $umumiy -= $tortlik;
        $tortlik_soni += 1;
        if ($umumiy <= 0){
           break; 
        }
        $umumiy -= $uchlik;
        $uchlik_soni += 1;
        if ($umumiy <= 0){
            break; 
        } 
    }

    echo "$uchlik_soni ta 3 lik chelak, $tortlik_soni ta 4 lik chelak ishlatildi!\nJami sarflangan vaqt : " . ($tortlik_soni*4 + $uchlik_soni*3) . " sekund!" . PHP_EOL;
