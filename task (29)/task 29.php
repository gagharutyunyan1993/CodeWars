<?php

function debug($arr){
    echo "<pre>" . print_r($arr,1) . "</pre>";
}

$num = '2 / (2 + 3) * 4.33 - -6';

function calculator($a, $b, $op)
{
    switch ($op) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            return $a / $b;
    }
    return 0;
}

function calc(string $expression): float
{
    $expression = str_replace(' ', '', $expression);
    $matches = [];
    do {
        //vekalum enq pakagceri mejin@
        $pattern = '/(\([\d\+\-\*\/.]+\))/U';
        preg_match_all($pattern, $expression, $matches);
        foreach ($matches[0] as $m) {
            $subM = parser($m);
            $expression = str_replace($m, $subM, $expression);
            break;
        }
    } while ($matches[0]);
    $result = parser($expression);
    return $result;
}

function parser(string $expression): float
{
    $matches = [];
    $expression = trim($expression, '(');
    $expression = trim($expression, ')');
    do {
        $check = false;
        //bajanum --> bazmapatkum
        $pattern = '/([\-]?[\d.]+)([\*\/]{1})([\-]?[\d.]+)/';
        preg_match_all($pattern, $expression, $matches);
        debug($matches);
        if ($matches[0]) {
            $expression = str_replace($matches[0][0], calculator($matches[1][0], $matches[3][0], $matches[2][0]), $expression);
            $check = true;
            continue;
        }
        while (strpos($expression, '+-') !== false || strpos($expression, '--') !== false || strpos($expression, '/+') !== false) {
            $expression = str_replace('+-', '-', $expression);
            $expression = str_replace('--', '+', $expression);
            $expression = str_replace('/+', '/', $expression);
            $check = true;
        }
        
        $pattern = '/[\+]?([\-]?[\d.]+)([\+\-]{1})[\+]?([\-]?[\d.]+)/';
        preg_match_all($pattern, $expression, $matches);

        if ($matches[0]) {
            $expression = str_replace($matches[0][0], calculator($matches[1][0], $matches[3][0], $matches[2][0]), $expression);
            $check = true;
        }


    } while ($check);
    return floatval($expression);
}

debug(calc($num));