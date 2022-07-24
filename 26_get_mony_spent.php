<?php

function getMoneySpent($keyboards,$drives,$b){
    $maximumSpent = -1;
    foreach ($keyboards as $key=>$keyboard){
        foreach ($drives as $k=>$drive){
            $value = $keyboard+$drive;
            if($value<=$b && $value>=$maximumSpent){
                $maximumSpent = $value;
            }
        }
    }

    return $maximumSpent;
}
$b = 5;
$keyboard = [4];
$drives   = [5];
echo getMoneySpent($keyboard,$drives,$b);