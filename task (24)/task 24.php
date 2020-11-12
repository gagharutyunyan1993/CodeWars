<?php
function debug($name)
{
    echo "<pre>" . print_r($name, 1) . "</pre>";
}

$string = "aaaaaaaaaaaaaaaabbbbbbbbbbbbbbbbbbmmmmmmmmmmmmmmmmmmmxyz";


function printerError($s)
{
    $countError = 0;
    $alphabet = range('a', 'm');

    $countValues = array_count_values(str_split($s));

    foreach ($countValues as $k => $v) {
        if (!in_array($k, $alphabet)) {
            $countError += $v;
        }
    }
    return "$countError/".array_sum($countValues);
}

var_dump(printerError($string));