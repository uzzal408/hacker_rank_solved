<?php

function arrayReverse($a){
    $rae = [];
    for ($i=count($a)-1;$i>=0;$i--){
        $rae[] = $a[$i];
    }
    return $rae;
}

$a = [4,5,6,1,2];
print_r(arrayReverse($a));


