<?php
function bonAppetit($bill,$k,$b){
    $total_bill = 0;
    foreach ($bill as $key=>$bi){
        if($key!=$k){
          $total_bill+=$bi;
        }
    }
    if((($total_bill)/2)==$b){
        return 'Bon Appetit';
    }else {
        return $b - (($total_bill) / 2);
    }
}
$bill = [3,10,2,9];
echo  bonAppetit($bill,1,7);