<?php
function subarray_div($s,$d,$m){
    $result = 0;
    $sl = 0;
    foreach ($s as $key=>$el){
        $sum = 0;
        for($i=$sl;$i<$m+$sl;$i++){
           $sum = $sum+$s[$i];
        }
        if($sum==$d){
            $result++;
        }
        $sl++;
    }
    return $result;
}

$s = [1,2,1,3,2];
echo subarray_div($s,3,2);