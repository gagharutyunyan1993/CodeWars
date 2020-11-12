<?php
function solution($x, $y)
{
    $n = strlen($y);
    $m = substr($x, -$n);
    if($y == $m)
    {
        return 'True';
    }
    return 'false';
}
echo solution('armaazn','aaxzn');
