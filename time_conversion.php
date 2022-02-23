<?php
function timeConversion($s){
    $timeArray = explode(":",$s);
    $sec = preg_replace("/[^0-9\.]/", '', $timeArray[2]);

    if(preg_match("/PM/",$timeArray[2])){
       if($timeArray[0]!=12){
           $timeArray[0] =  $timeArray[0] + 12;
       }
   }else{
        if($timeArray[0]==12){
            $timeArray[0] =  "00";
        }
    }

   $time = $timeArray[0].':'.$timeArray[1].':'.$sec;
   return $time;

}

echo timeConversion("02:34:50PM");