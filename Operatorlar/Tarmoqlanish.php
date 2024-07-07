<?php

// 1-masala;

// $son = 0;

// if($son > 0){
    // echo "Musbat son" . PHP_EOL;
// } elseif ($son == 0){
    // echo "0 kiritdingiz" . PHP_EOL;
// } else {
    // echo "Manfiy son" . PHP_EOL;
// }

// 2-masala;

// $N = 5;
// 
// if($N == 1){
    // echo "Dushanba\n";
// } elseif($N == 2){
    // echo "Seshanba\n";
// } elseif($N == 3){
    // echo "Chorshanba\n";
// } elseif($N == 4){
    // echo "Payshanba\n";
// } elseif($N == 5){
    // echo "Juma\n";
// } elseif($N == 6){
    // echo "Shanba\n";
// } elseif($N == 7){
    // echo "Yakshanba\n";
// } else {
    // echo "Hafata kunlarida mavjud bo'lmagan kunni kiritdingiz!\n";
// }

// 3- masala;

// $word = "sardoroga";
// 
// if (strlen($word) < 3){
    // echo strtoupper($word) . PHP_EOL;
// } elseif(strlen($word) >= 3){
    // $word = substr($word,0,-3) . strtoupper(substr($word,-3));
    // echo $word . PHP_EOL;
// }

// 4-masala;

// $word = "limA";

// if($word[0] == "O" && $word[-1] == "A"){
    // echo "OleOleGoGo\n";
// } elseif($word[-1] == "A"){
    // echo "GoGo\n";
// } elseif($word[0] == "O"){
    // echo "OleOle\n";
// }

// switch ($word[0]) {
//     case "O":
//         switch($word[-1]){
//             case "A":
//                 echo "OleOleGoGo\n";
//                 break;
//             default:
//                 echo "OleOle\n";
//         }
//         break;
//     default:
//         if ($word[-1] == "A"){
//             echo "GoGo\n";
//             break;
//         } else{
//             echo "$word\n";
//         }
// }

// 5-masala;

// $sonlar = [42,-21,0,9];
// $musbat = 0; $manfiy = 0;
// 
// foreach($sonlar as $son){
    // if($son > 0){
        // $musbat += 1;
    // } elseif($son < 0){
        // $manfiy += 1;
    // }
// }
// echo "4 ta sondan $musbat tasi musbat $manfiy tasi manfiy\n"

// 6-masala;

// $summa = 400000;
// 
// if ($summa > 500000){
    // $summa = $summa * 0.8;
    // echo "$summa so'm to'ladi\n";
// } elseif($summa > 300000){
    // $summa = $summa * 0.9;
    // echo "$summa so'm to'ladi\n";
// } else {
    // echo "$summa so'm to'ladi\n";
// }

// 7-masala;

// $N = 19000;
// 
// $Osh = 17500;
// $Non = 1500;
// $Salat = 4000;
// 
// if ($N >= ($Osh + $Non + $Salat)){
    // echo "Osh, Salat, Nonga yetadi\n";
// } elseif($N >= ($Osh + $Salat)){
    // echo "Osh, Salatga yetadi\n";
// } elseif($N >= ($Osh + $Non)){
    // echo "Osh, Nonga yetadi\n";
// } elseif($N >= ($Non + $Salat)){
    // echo "Salat, Nonga yetadi\n";
// }elseif($N >= $Osh){
    // echo "Oshga yetadi\n";
// } elseif($N >= $Salat){
    // echo "Salatga yetadi\n";
// } elseif($N >= $Non){
    // echo "Nonga yetadi\n";
// } else {
    // echo "Eshmatning puli hech narsaga yetmaydi!\n";
// } 

// 8-masala;

// $Matematika = 3.1; $Fizika = 2.1; $Ona_tili = 1.1;
// $M = 33; $F = 23; $O = 10;
// 
// $Umumiy = $M * $Matematika + $F * $Fizika + $O * $Ona_tili;
// 
// if ($Umumiy >= 160.4){
    // echo "Grandga kirdingiz\n";
// } elseif($Umumiy >= 100){
    // echo "Kontraktga kirdingiz\n";
// } elseif($Umumiy >= 56){
    // echo "Super Kontraktga kirdingiz\n";
// } else {
    // echo "Afsuski o'qishga kira olmadingiz!\n";
// }

// 9-masala;

// $word = "Python";
// echo "Old : $word\n";
// 
// if (strlen($word) < 2){
    // echo "New : " . $word . PHP_EOL;
// } else {
    // $word_1 = substr($word,-2);
    // $word = substr($word,0,-2) . $word_1[1] . $word_1[0];
    // echo "New : " . $word . PHP_EOL;
// }

// 10-masala;

// $size = 10400000000;
// 
// if((($size / 1024) / 1024) / 1024 >= 1){
    // echo round(((($size / 1024) / 1024) / 1024),2) . " GB\n";
// } elseif((($size / 1024) / 1024) >= 1){
    // echo round((($size / 1024) / 1024),2) . " MB\n";
// } elseif(($size / 1024) >= 1){
    // echo round(($size / 1024),2) . " KB\n";
// } elseif($size  < 1024){
    // echo "$size bayt\n";
// }

// 11-masala;

$IP = "127.0c.0.1";
$bool = true;

if (substr_count($IP, ".") == 3){
    $massiv = explode(".",$IP);
    foreach($massiv as $str){
        if (!is_numeric($str)){
            echo "IP emas\n";
            $bool = false;
            break;
        }
    }
    if($bool){
        echo "IP\n";
    };
} else {
    echo "IP emas\n";
}

?>