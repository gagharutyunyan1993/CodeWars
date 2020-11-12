<?php
function debug($name)
{
    echo "<pre>" . print_r($name, 1) . "</pre>";
}

$array = [
    [1, 2, 3, 1],
    [2, 5, 6, 4],
    [7, 8, 9, 7],
    [7, 8, 9, 7]
];
$array2 = [[]];

function snail($array)
{
    if (count($array) == 0) {
        return $array;
    }
    $result = [];
    while (count($array) !== 0) {
        $result = array_merge($result, array_shift($array));
        $array = recursion($array);
    }
    return $result;
}

function recursion($array)
{
    if (count($array) == 0) {
        return $array;
    }

    $result = [];
    $firstArrLength = count($array[0]);
    $length = count($array);

    for ($a = $firstArrLength - 1; $a >= 0; $a--) {

        for ($b = 0; $b < $length; $b++) {
            $result[$a][$b] = $array[$b][$a];
        }

    }
    debug($array);
    return $result;
}


debug(snail($array));