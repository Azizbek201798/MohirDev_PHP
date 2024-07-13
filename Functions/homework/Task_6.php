<?php
function sumOfOddNumbers($N){
    if ($N == 1) {
        return 1;
    } else {
        return $N + sumOfOddNumbers($N - 2);
    }
}

$N = 3;
$result = sumOfOddNumbers($N);
echo "1 dan $N gacha bo'lgan toq sonlar yig'indisi: $result\n";

?>