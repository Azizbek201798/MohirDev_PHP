<?php

function TimeCounter(int $N){
    echo (int)($N / 3600) . " soat, " . (int)(($N % 3600)/60) . " minut, " . ($N%60) . " sekund";
}

TimeCounter(61);

?>