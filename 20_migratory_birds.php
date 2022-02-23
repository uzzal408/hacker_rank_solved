<?php

function migratory_birds($arr){
   $new_arr = array_count_values($arr);
   $val = 0;
   foreach ($new_arr as $key=>$value){
      if($value>=$val){
          if($value==$val && $key>=$k){

          }else{
              $val = $value;
              $k = $key;
          }
      }
   }
   return $k;
}

$arr = [1,2,3,4,5,4,3,2,2,1,3,4,4];
echo migratory_birds($arr);