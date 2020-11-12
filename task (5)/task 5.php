<?php
function getDrinkByProfession($name){

    $word = ucwords(strtolower($name));
    switch ($word){
        case 'Jabrone': echo 'Patron Tequila';break;
        case 'School Counselor': echo 'Anything with Alcohol'; break;
        case 'Programmer': echo 'Gipster Craft Brear'; break;
        default: echo 'Beer';
    }
}

getDrinkByProfession('School COUnselor');