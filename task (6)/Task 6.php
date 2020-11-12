<?php
//task 1
function check($string1, $string2)
{
   if(count_chars($string1) == count_chars($string2))
    {
        echo 'True';
    }else{
        echo 'False';
    }

}
check('abcacczmw', 'abcacczmw');

