<?php

    $text = "Salom";
    $length = strlen($text);
    $reversedText = '';

    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedText .= $text[$i];
    }

    echo $reversedText . PHP_EOL;
