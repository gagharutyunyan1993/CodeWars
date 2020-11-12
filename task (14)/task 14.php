<?php
function debug($name)
{
echo "<pre>" . print_r($name, 1) . "</pre>";
}


$a = "xyaabbbccccdefww";
$b = "xxxxyyyyabklmopq";

function longest($a, $b)
{
    $string1 = str_split($a);
    $string2 = str_split($b);
    $result = array_merge($string1, $string2);
    $result = array_unique($result);
    sort($result);
    return implode('', $result);
}

var_dump(longest($a, $b));
echo '<br />';