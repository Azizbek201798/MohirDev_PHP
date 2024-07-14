<?php

$text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris gravida risus et risus faucibus, at rutrum risus rhoncus. Cras nec arcu arcu. Curabitur euismod erat erat, in fermentum risus lobortis ac. Morbi varius risus in erat cursus, at viverra magna porta. Nulla facilisi. Integer efficitur orci a tortor aliquet, sed pretium sem rhoncus. Praesent rutrum orci et ligula suscipit, a varius quam interdum. Donec gravida, arcu at vulputate ullamcorper, felis elit condimentum urna, et commodo neque augue in metus.";

// For tsikli bilan hisoblash
$countFor = 0;
for ($i = 0; $i < strlen($text); $i++) {
    if ($text[$i] === 'r') {
        $countFor++;
    }
}

// While tsikli bilan hisoblash
$countWhile = 0;
$index = 0;
while ($index < strlen($text)) {
    if ($text[$index] === 'r') {
        $countWhile++;
    }
    $index++;
}

echo "For tsikli bilan 'r' harfi nechta marta ishlatilgan: " . $countFor . "\n";
echo "While tsikli bilan 'r' harfi nechta marta ishlatilgan: " . $countWhile . "\n";
