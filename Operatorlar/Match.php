<?php

    $kun = 5;
    $returned_value = match($kun) {
        1 => "Dushanba",
        2 => "Seshanba",
        3 => "Chorshanba",
        4 => "Payshanba",
        5 => "Juma",
        6 => "Shanba",
        7 => "Yakshanba",
    };

    echo $returned_value . PHP_EOL;

?>