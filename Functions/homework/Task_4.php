<?php

function NumbersInWords($number){
    $ones = array(
        1 => 'bir',
        2 => 'ikki',
        3 => 'uch',
        4 => 'to\'rt',
        5 => 'besh',
        6 => 'olti',
        7 => 'yetti',
        8 => 'sakkiz',
        9 => 'to\'qqiz',
        10 => 'o\'n',
        11 => 'o\'n bir',
        12 => 'o\'n ikki',
        13 => 'o\'n uch',
        14 => 'o\'n to\'rt',
        15 => 'o\'n besh',
        16 => 'o\'n olti',
        17 => 'o\'n yetti',
        18 => 'o\'n sakkiz',
        19 => 'o\'n to\'qqiz'
    );

    $tens = array(
        2 => 'yigirma',
        3 => 'o\'ttiz',
        4 => 'qirq',
        5 => 'ellik',
        6 => 'oltmish',
        7 => 'yetmish',
        8 => 'sakson',
        9 => 'to\'qson'
    );

    if ($number == 0) {
        return 'nol';
    }

    if ($number < 20) {
        return $ones[$number];
    }

    if ($number < 100) {
        $ten = (int)($number / 10);
        $one = $number % 10;
        $result = $tens[$ten];
        if ($one > 0) {
            $result .= ' ' . $ones[$one];
        }
        return $result;
    }

    if ($number == 100) {
        return 'yuz';
    }

    return "Faqat 100 gacha bo'lgan son kiriting" ;
}

$result = NumbersInWords(532);
echo '54 - ' . $result;

?>