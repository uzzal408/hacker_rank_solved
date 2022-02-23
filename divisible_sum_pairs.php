<?php
function divisible_sum_pairs($n,$k,$ar){
    $output = 0;
    for ($i=0;$i<=$n;$i++){
        for ($j=$i+1;$j<=$n-1;$j++){
            if(($ar[$i]+$ar[$j])%$k==0){
                $output++;
            }
        }
    }
    return $output;
}
$ar = [1, 3, 2, 6, 1, 2];
echo divisible_sum_pairs(6,3,$ar);