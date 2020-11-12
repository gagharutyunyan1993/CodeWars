<?php
function check1(String $string,Array $array)
{
    $result = [];
    foreach ($array as $k)
    {
        if(count_chars($string) == count_chars($k))
        {
            $result[] = $k;
        }
    }
    print_r($result);
}
check1('arman',['seto','heno','arman','nrmaa']);