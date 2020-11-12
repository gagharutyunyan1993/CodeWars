<?php
function duplicateCount($text) {
    $res = array_filter(count_chars(strtolower($text), 1), function($v) {
        return $v > 1;
    });
    return count($res);
}


<?php
function check(string $string) {
    $stringToArray = array_count_values(str_split($string));
    foreach ($stringToArray as $k => $v) {
        if ($v > 1) {
            $countLetters[] = $v;
            $letters[] = $k;
        }
    }
    $lettersSum = count($countLetters);
    $result = [$lettersSum, $letters];

    return $result;
}

check('vvvaaaaddmoodikm');