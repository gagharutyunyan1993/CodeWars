<?php
function debug($name)
{
    echo "<pre>" . print_r($name, 1) . "</pre>";
}

$bin=  '45385593107843568';

function fake_bin(string $s) {
    $stringToArray = str_split($s);
    $result = [];
    foreach ($stringToArray as $k => $v){
        if($v < 5){
            $result[] = '0';
        }else{
            $result[] = '1';
        }
    }
    return implode('',$result);
}

debug(fake_bin($bin));