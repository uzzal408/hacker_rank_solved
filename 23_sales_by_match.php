<?php
function sockMerchant($n,$ar){
    $total_pair_count = 0;
    $new_arr = array_unique($ar);
    foreach ($new_arr as $key=>$item){
        $count = 0;
        foreach ($ar as $k=>$v){
            if($item==$v){
              $count = $count+1;
            }
        }
        $pair_count = (int)($count/2);
        $total_pair_count = $pair_count+$total_pair_count;
    }
    return $total_pair_count;
}

$ar = [10, 20, 20, 10, 10, 30, 50, 10, 20];
$n = 9;

echo sockMerchant($n,$ar);