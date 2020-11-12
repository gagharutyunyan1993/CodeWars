<?php
//example
function highSumWord(string $string)
{
    //global $alphabet;
    $alphabet = range('a', 'z');
    $stringToArray = explode(' ', $string);
    $highistSum = 0;

    foreach ($stringToArray as $key => $value) {
        $wordsSum = 0;
        $wordToArr = str_split($value);

        foreach ($wordToArr as $k => $v) {
            $letCount = (array_search($v, $alphabet) + 1);
            $wordsSum += $letCount;
        }

        if ($wordsSum > $highistSum) {
            $highWord = $value;
            $highistSum = $wordsSum;
        } elseif ($wordsSum == $highistSum) {
            $highistSum = $highistSum;
        }
    }
    return $highWord;
}


$name = "my name is John Smith";
echo highSumWord($name);

//example 2
function highSumWord(string $string)
{
    $string = strtolower($string);
    $alphabet = array_flip(range('a', 'z'));
    $highestScore = 0;
    $highestScoreWord = '';

    foreach (explode(' ', $string) as $word) {
        $score = array_reduce(str_split($word), function($r, $v) use($alphabet) {
            return $r + $alphabet[$v];
        });

        if ($score > $highestScore) {
            $highestScore = $score;
            $highestScoreWord = $word;
        }
    }

    return ['score' => $highestScore, 'word' => $highestScoreWord];
}


$name = "my name is John Smith";
print_r(highSumWord($name));