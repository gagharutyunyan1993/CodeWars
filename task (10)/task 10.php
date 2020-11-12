<?php
function calculateDamage(string $yourType, string $opponentType, int $attack, int $defense): int
{
$power = [
'fire' => [
'grass' => 2,
'water' => 0.5,
'electric' => 1,
],
'water' => [
'grass' => 1,
'fire' => 2,
'electric' => 0.5
],
'electric' => [
'grass' => 2,
'fire' => 1,
'water' => 0.5,
],
'grass' => [
'fire' => 0.5,
'water' => 1,
'electric' => 0.5
]
];



return 50 * ($attack/$defense) * $power[$yourType][$opponentType];
};


echo "Damage : " . calculateDamage('fire','water', 20 , 4);
echo '<br />';