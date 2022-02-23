<?php

function plusMinus($arr){
    $size = count($arr);
    $positive = 0;
    $negative = 0;
    $zero     = 0;
    for ($i=0;$i<$size;$i++){
        if($arr[$i]>0){
            $positive = $positive+1;
        }elseif($arr[$i]<0){
            $negative = $negative+1;
        }elseif($arr[$i]==0){
            $zero = $zero+1;
        }
    }

    $positiveFraction = number_format($positive/$size,6);
    $negativeFraction = number_format($negative/$size,6);
    $zeroFraction     = number_format($zero/$size,6);

    printf('%f',$positiveFraction);
    printf('%f',$negativeFraction);
    printf('%f',$zeroFraction);

    //    echo $positiveFraction;
    //    echo $negativeFraction;
    //    echo $zeroFraction;
//    $array = [$positiveFraction,$negativeFraction,$zeroFraction];
//    print_r($array);
}
$ar = [-4,3,-9,0,4,1];
plusMinus($ar);