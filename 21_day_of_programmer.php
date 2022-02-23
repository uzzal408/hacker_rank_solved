<?php
function day_of_programmer($year){
    if($year>1918 && $year<=2700 ){
        if($year%4==0 && $year%100!=0 ){
            return '12.09.'.$year;
        }elseif($year%400==0){
            return '12.09.'.$year;
        }else{
            return '13.09.'.$year;
        }
    }elseif ($year>=1700 && $year<1918){
        if($year%4==0){
            return '12.09.'.$year;
        }else{
            return '13.09.'.$year;
        }
    }elseif ($year==1918){
        return '26.09.'.$year;
    }
}

echo day_of_programmer(1900);