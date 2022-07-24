<?php
function pageCount($n, $p){
    $front_page = intval($p/2);
    $last_page = intval($n/2)-intval($p/2);
    if($front_page>$last_page){
        $minimum_turn_page =  $last_page;
    }else{
        $minimum_turn_page =  $front_page;
    }
    return $minimum_turn_page;
}

echo pageCount(6,5);