<?php
function countingValley($steps,$path){
    $valley = 0;
    $level = 0;
    $paths = str_split($path);
   foreach ($paths as $path){
       if($path == 'U'){
           $level+=1;
           if($level==0) {
               $valley++;
           }
       }elseif ($path == 'D'){
           $level--;
       }
   }
   return $valley;
}

 echo countingValley(8,'UDDDUDUU');