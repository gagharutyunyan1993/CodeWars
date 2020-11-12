<?php
$name = 'Sam Harris';

function abbrevName($name)
{
    $n = '';
    $nameToArray = explode(' ', $name);

    foreach ($nameToArray as $k) {
        $n .= substr($k, 0, 1) . '.';
    }
    return substr(strtoupper($n), 0, -1);
}


debug(abbrevName($name));
