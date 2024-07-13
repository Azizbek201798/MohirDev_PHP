<?php

    function Division(int $M,int $N){
        
        $butun = $M;
        $qoldiq = 0;

        while($butun >= $N){
            $butun -= $N;
            $qoldiq += 1;
        }

        echo "$M / $N\n";
        echo "Butun = $butun " ."\nQoldiq = $qoldiq\n";
    
    }

    Division(10,3);