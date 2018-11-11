<?php


$number = "128848904.0093";
$dot_position = strpos($number , ".");
$double = "0".substr($number , $dot_position);
$double = round($double , 16);
echo $double;
function toMoney($val,$symbol='$',$r=0)
{
    $n = $val;
    $sign = ($n < 0) ? '-' : '';
    $i = number_format(abs($n),$r);

    return  $symbol.$sign.$i;
}

echo toMoney($number);