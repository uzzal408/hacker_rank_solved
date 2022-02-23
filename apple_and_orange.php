<?php

function countAppleOrange($s,$t,$a,$b,$apples,$oranges){
    $countApple = 0;
    $countOrange = 0;
    for ($i=0;$i<count($apples);$i++){
        $ad = $apples[$i]+$a;
        if($ad>=$s && $ad<=$t){
            $countApple = $countApple+1;
        }
    }

    for ($j=0;$j<count($oranges);$j++){
        $od = $oranges[$j]+$b;
        if($od>=$s && $od<=$t){
            $countOrange = $countOrange+1;
        }
    }

    echo $countApple ."\r\n";
    echo $countOrange;
}

$s = 7;
$t = 10;
$a = 4;
$b = 12;
$apples = [2,3,-4];
$oranges = [3,-2,-4];
countAppleOrange($s,$t,$a,$b,$apples,$oranges);