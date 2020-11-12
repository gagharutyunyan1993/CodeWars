<?php
function debug($name)
{
    echo "<pre>" . print_r($name, 1) . "</pre>";
}

$string = "pizzachickenfriesburgercokemilkshakefriessandwich";



function getOrder($input)
{
    $result = '';

    $menu = ['Burger', 'Fries', 'Chicken', 'Pizza', 'Sandwich', 'Onionrings', 'Milkshake', 'Coke'];
    foreach($menu as $k => $v){
        $result .= str_repeat($v.' ',substr_count($input,lcfirst($v)));
    }

    return trim($result);
}

debug(getOrder($string));