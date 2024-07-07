<?php

$x = 10;
$y = 5;
$z = &$x;

echo $x + $y . PHP_EOL;
echo $x - $y . PHP_EOL;
echo $x * $y . PHP_EOL;
echo $x / $y . PHP_EOL;
echo $x % $y . PHP_EOL;
echo $x ** $y . PHP_EOL;
echo $z . PHP_EOL;

?>