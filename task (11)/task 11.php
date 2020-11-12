<?php
function debug($name){
    echo "<pre>" . print_r($name,1) . "</pre>";
}
#example 1
function partsSums($ls) {
    $result[] = $sum = array_sum($ls);
    foreach ($ls as $value) {
        $sum -= $value;
        $result[] = $sum;
    }
    return $result;
}
#example 2
debug(partsSums(array(0, 1, 3, 6, 10)));
echo "<br/>";

/*
function partsSums($ls) {
    $length = count($ls);
    $arr = [];
    for($i = -1;$i < $length;$i++){
        $arr[] = array_sum($ls);
        array_shift($ls);
    }
    return $arr;
}*/
