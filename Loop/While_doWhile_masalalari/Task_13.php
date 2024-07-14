<?php
function convertToWords($number)
{
    $words = [
        0 => 'nol',
        1 => 'bir',
        2 => 'ikki',
        3 => 'uch',
        4 => 'to\'rt',
        5 => 'besh',
        6 => 'olti',
        7 => 'yetti',
        8 => 'sakkiz',
        9 => 'to\'qqiz'
    ];

    $result = '';

    while ($number > 0) {
        $digit = $number % 10; 
        $result = $words[$digit] . ' ' . $result;
        $number = (int)($number / 10); 
    }

    return $result;
}

$number = 234560; 
$words = convertToWords($number); 
echo "Natija: " . $words . PHP_EOL;
