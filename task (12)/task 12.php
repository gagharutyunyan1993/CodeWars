<?php
function alphabet_position(string $s)
{
$stringToArray = str_split(strtolower($s));
$alpha = array_flip(range('a', 'z'));
$result = '';

foreach ($stringToArray as $k)
{
if(isset($alpha[$k])){
$result = $alpha[$k];
}
}
return implode( " ", $result);
}