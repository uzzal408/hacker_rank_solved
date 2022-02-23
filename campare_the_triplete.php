<?php
    function triplet($a,$b){
        $a_points = 0;
        $b_points = 0;
        $returnArray = [];

        for($i=0;$i<count($a);$i++){
            if($a[$i]>$b[$i]){
                $a_points = $a_points+1;
            }elseif($a[$i]<$b[$i]){
                $b_points = $b_points+1;
            }
        }
       $returnArray = [$a_points,$b_points];
        return $returnArray;
    }
    $a=[2,1,4];
    $b = [3,2,3];
    print_r(triplet($a,$b));

?>