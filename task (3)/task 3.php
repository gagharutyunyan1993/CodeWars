<?php
#example 1
function getMiddle($x){
    $length = strlen($x);
    if($length % 2 == 0){
        return substr($x , $length / 2 - 1, 2);
    }
    return substr($x, ($length - 1) / 2, 1);
}
echo getMiddle('ABBsA');


#example 2
function getMiddles($x)
{
    $length = strlen($x);
    if($length % 2 == 0 )
    {
        $y = $length / 2 - 1 ;
        $z = $length / 2;
        return $x{$y} . $x{$z};
    }else{
        $y = ($length - 1) / 2;
        return $x{$y};
    }

}

echo getMiddles('ABSDa');
?>