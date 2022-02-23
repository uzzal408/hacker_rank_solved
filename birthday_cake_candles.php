<?php

function BirthdayCandles($ar){
    sort($ar);
    $length = count($ar)-1;
    $tallest = $ar[$length];
    $blow_out = 0;

    for ($i=0;$i<=$length;$i++){
        if($ar[$i]==$tallest){
            $blow_out++;
        }
    }

    return $blow_out;

}
$ar = [4,4,1,3];
echo BirthdayCandles($ar);