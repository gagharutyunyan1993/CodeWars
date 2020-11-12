<?php
function debug($name)
{
    echo "<pre>" . print_r($name, 1) . "</pre>";
}

function encodeRailFenceCipher($string, $numberRails)
{
    $strToArr = str_split($string);
    $col = 1;
    $row = 1; //num of row
    $result = "";
    $arr = array();
    foreach ($strToArr as $k) {
        // matrix
        $arr[$col][] = $k;
        $col += $row;

        if ($col == $numberRails) {
            $row = -1;
        }
        if ($col == 1) {
            $row = 1;
        }
    }
    foreach ($arr as $k) {
        $result .= implode('', $k);
    }
    return $result;

}

debug(encodeRailFenceCipher("Hello, World!", 3));
echo "**********************************";
function decodeRailFenceCipher($string, $numberRails)
{
    $strToArr = str_split($string);
    $col = 1;
    $row = 1;
    $result = "";
    $count = count($strToArr);
    $arr = array();
    for ($i = 0; $i < $count; $i++) {
        $arr[$col][] = $i;
        $col += $row;
        if ($col == $numberRails) {
            $row = -1;
        }
        if ($col == 1) {
            $row = 1;
        }
    }
    $index = array();
    foreach ($arr as $k) {
        $index = array_merge($index, $k);
    }
    asort($index);

    foreach ($index as $key =>$letter) {
            echo $key;
        $result .= $strToArr[$key];
    }


    return $result;
}

debug(decodeRailFenceCipher("Hoo!el,Wrdl l", 3));

