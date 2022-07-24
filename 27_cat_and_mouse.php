<?php
function catAndMouse($x,$y,$z){
    $catA = abs($x-$z);
    $catB = abs($y-$z);
    if($catA<$catB){
        return 'Cat A';
    }elseif($catA>$catB){
        return 'Cat B';
    }elseif ($catA == $catB){
        return 'Mouse C';
    }

}

echo catAndMouse(2,5,4);