<?php
$test1 = [0, 0, 0, 1];
$test2 = [0, 0, 1, 0];
$test3 = [0, 1, 0, 1];
$test4 = [1, 0, 0, 1];
$test5 = [0, 0, 1, 0];

function binaryArrayToNumber($arr) {
    $arrToString = implode('', $arr);
    return bindec($arrToString);
}

debug(binaryArrayToNumber($test3));