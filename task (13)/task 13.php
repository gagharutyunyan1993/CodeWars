<?php
function debug($name)
{
echo "<pre>" . print_r($name, 1) . "</pre>";
}


$a1 = [121, 144, 19, 161, 19, 144, 19, 11];
$a2 = [11*11, 121*121, 144*144, 19*19, 161*161, 19*19, 144*144, 19*19];


debug($a2);
echo "<br />";
$res = true;



function comp($a1, $a2) {

if(is_null($a1) || is_null($a2)){
return false;
}
sort($a1,SORT_NUMERIC);
sort($a2,SORT_NUMERIC);

$result = [];
foreach ($a1 as $k){
$result[] += pow($k,2);
}
if($result != $a2) {
return false;
}
return true;
};

var_dump(comp($a1,$a2));