<?php
function check($n)
{
    $x = 3;
    $y = 5;
    $result = 0;
    for ($i = 0; $i < $n; $i++) {
        if ($i % $x == 0 || $i % $y == 0) {
            $result += $i;
        }
    }
    return $result;
}

echo check(1000);
