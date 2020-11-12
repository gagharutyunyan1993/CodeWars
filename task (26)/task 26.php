<?php
function debug($name)
{
    echo "<pre>" . print_r($name, 1) . "</pre>";
}

$bin = "Las Vegas";

function get_strings($city)
{
    $city = array_count_values(str_split(strtolower(str_replace(" ", "", $city))));
    $str = '';
    foreach ($city as $k => $v) {
        $str .= "$k:" . str_repeat('*', $v) . ",";
    }

    return substr($str, 0, -1);
}

debug(get_strings($bin));