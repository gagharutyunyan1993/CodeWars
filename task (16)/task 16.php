<?php
$string = "iiisxxxagagagagdoso";
function pars($data)
{
    $result = [];
    $count = 0;
    $dataToString = str_split($data);
    foreach ($dataToString as $k) {
        switch ($k) {
            case "i":
                $count += 1;
                break;
            case "d":
                $count -= 1;
                break;
            case "s":
                $count = pow($count, 2);
                break;
            case 'o':
                $result[] = $count;
                break;
        }
    }
    return $result;
}

var_dump(pars($string));