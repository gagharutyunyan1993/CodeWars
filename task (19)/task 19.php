<?php
$ar = Array
(
    '0' => 2,
    '1' => 8,
    '2' => 14,
    '3' => 20,
    '4' => 26,
);
$ar2 = [4, 12, 16];
//return $list[0];
function findMissing($list)
{
    $x = (end($list) - $list[0]) / count($list);
    $newArr = range($list[0],end($list),$x);
    return array_diff(array_unique($newArr),$list);
}

debug(findMissing($ar));