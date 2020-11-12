<?php
function sum_intervals($intervals)
{
    $result = [];

    for($i = 0;$i < count($intervals); $i++){
        for($j = $intervals[$i][0] + 1;$j <= $intervals[$i][1];$j++){
            $result[] = $j;
        }
    }

    return count(array_unique($result));

}

debug(sum_intervals($ar));