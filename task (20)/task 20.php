<?php

$int1 = 91;
$int2 = 1;
function digPow($n, $p)
{
    $result = 0;
    $split = str_split($n);
    foreach ($split as $k) {
        $result += pow($k, $p++);
    }
    if(is_int($result / $n)){
        return $result / $n;
    }
    return -1;
}

var_dump(digPow($int1, $int2));