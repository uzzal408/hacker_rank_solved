<?php
function veryBigSum($ar){
    $sum = 0;
    for ($i=0;$i<count($ar);$i++){
        $sum = $sum+$ar[$i];
    }
    return $sum;
}

$array = [1000000001,1000000002,1000000003,1000000004,1000000005];
echo veryBigSum($array);