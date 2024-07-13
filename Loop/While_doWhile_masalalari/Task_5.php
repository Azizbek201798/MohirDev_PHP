<?php

    function Word_to_number($word){
        
        $len = strlen($word);
        $i = 0;
        $result="";

        while ($i < $len){
            if(is_numeric($word[$i])){
                $result .= $word[$i];
            }
            $i++;
        }
        return $result;
    }

    echo Word_to_number("Ushbu matn 26.11.2019 16:59 da yozildi. 1minut kam 5");