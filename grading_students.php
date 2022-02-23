<?php
function gradingStudents($grades){

    for ($i=0;$i<count($grades);$i++){
        if($grades[$i]>=38){
            $modulus = $grades[$i]%5;
            $x = 5-$modulus;
            if($x<3){
                $round = $grades[$i]+$x;
                $grades[$i] = $round;
            }
        }          }
    return $grades;
}
    $grades=[73,67,38,33];
print_r(gradingStudents($grades));