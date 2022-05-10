<?php
function pageCount($n, $p){
    $front_page = $p/2;
    $last_page = ($n-$p)/2;
    if($front_page>$last_page){
        $minimum_turn_page =  (int)$last_page;
    }else{
        $minimum_turn_page =  (int)$front_page;
    }
    return $minimum_turn_page;
}

echo pageCount(6,2);