<?php
function debug($name){
    echo "<pre>" . print_r($name,1) . "</pre>";
}

$int = "12451";
function sumNum(string $string){
     $styringToArray = str_split($string);
     $arraySum = array_sum($styringToArray);
     if($arraySum % 3 == 0){
        return TRUE;
     }
     return False;
}

var_dump(sumNum($int));