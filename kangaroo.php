<?php
function kangaroo($x1,$v1,$x2,$v2){
    for(;;){
        $x1 = $x1+$v1;
        $x2  = $x2+$v2;

        if($x1!=$x2 && $v1==$v2){
            $result = 'NO';
            break;
        }

        if($x1==$x2){
            $result =  'YES';
            break;
        }
        if($v1>$v2){
            if($x1>$x2){
                $result =  'NO';
                break;
            }
        }elseif($v2>$v1){
            if($x2>$x1){
                $result =  'NO';
                break;
            }
        }

    }

    return $result;
}

$x1 = 42;
$v1 = 2;
$x2 = 70;
$v2 = 3;

echo kangaroo($x1,$v1,$x2,$v2);