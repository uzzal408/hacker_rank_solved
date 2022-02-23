<?php

$first = array(
    array(1,2,3),
    array(4,5,6),
    array(9,8,9)
);

function diagonalDifference($arr){
    $left = 0;
    $right = 0;
    for ($i=0;$i<count($arr);$i++){
        for ($j=0;$j<count($arr[$i]);$j++){
            if($i==$j) {
                $left = $left + $arr[$i][$j];
            }
        }
    }

    for ($i=count($arr)-1;$i>=0;$i--){
        for ($j=0;$j<count($arr[$i]);$j++){
            if(($i+$j)==count($arr[$i])-1){
                $right = $right+$arr[$i][$j];
            }
        }
    }

    $sum = $left - $right;
    $result = abs($sum);
    return $result;

}

echo diagonalDifference($first);