<?php

// abs() -> bu int|float tipidagi ma'lumot qabul qiladi;
echo abs(-10) . PHP_EOL;
echo abs(-5.54) . PHP_EOL;

// sqrt() -> ildiz chiqarish;
echo sqrt(9) . PHP_EOL;

// pow() -> darajaga ko'tarish;
echo pow(3,2) . PHP_EOL;

// floor() -> pastga yaxlitlash;
echo floor(3.4) . PHP_EOL;
echo floor(9.8) . PHP_EOL;

// ceil() -> yuqoriga yaxlitlash;
echo ceil(3.4) . PHP_EOL;
echo ceil(9.8) . PHP_EOL;

// round() -> songacha yaxslitlash;
echo round(3.856,0) . PHP_EOL;

// Eng zarur math functions;
// rand() va mt_rand() ning farqi rand() sekinroq ishlaydi;
echo pi() . PHP_EOL;
echo max(3,4) . PHP_EOL;
echo min(3,4) . PHP_EOL;
echo rand(45,90) . PHP_EOL;
echo mt_rand(1,100) . PHP_EOL;

?>