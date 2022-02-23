<?php

function breaking_record($arr){
    foreach ($arr as $key=>$ar){
        if($key==0){
            $min = $arr[0];
            $max = $arr[0];
            $min_count = 0;
            $max_count = 0;
       }else{
           if($arr[$key]>$max){
               $max = $arr[$key];
               $max_count++;
           }
           if($arr[$key]<$min){
               $min = $arr[$key];
               $min_count++;
           }
       }
    }

    return [$max_count,$min_count];
}

$a = [3,4,21,36,10,28,35,5,24,42];

print_r(breaking_record($a));