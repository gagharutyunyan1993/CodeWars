<?php
//Create a function that check if a number (n) is divisable by two numbers x AND y. All inputs are positive, non-zero digits.
function check($n , $x , $y)
{
    return $n % $x == 0 && $n % $y == 0;
}
echo check(100,7,20);


function getMiddle($text)
{
    $len = strlen($text);
    if ($len % 2 == 0) {
        return substr($text, $len / 2 - 1, 2);
    }
    return substr($text, ($len - 1) / 2, 1);
}


echo getMiddle('ABBA');