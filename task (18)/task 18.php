<?php
$srt = "bitcoin take over the world maybe who knows perhaps";
function findShort($str){
    $stringToArr = explode(" ",$str);
    $length = array_map('strlen',$stringToArr);
    return min($length);
}

debug(findShort($srt));