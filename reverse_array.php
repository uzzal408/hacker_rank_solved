<?php

function reverseArray($arr){
    $new_arr = [];
    for($i=count($arr)-1;$i>=0;$i--){
        array_push($new_arr,$arr[$i]);
    }
    return $new_arr;
}

$arr = [4,3,2,1];
print_r(reverseArray($arr));