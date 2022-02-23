<?php
function minMax($arr){

     sort($arr);
    $min = 0;
    $max = 0;
    for ($i = 0; $i<count($arr)-1; $i++){
        $min = $min+$arr[$i];
    }

    for ($i = count($arr)-1;$i>0;$i--){
        $max = $max+$arr[$i];
    }

    echo $min.' '.$max;

}
$arr = [2,4,1,5,3];
minMax($arr);