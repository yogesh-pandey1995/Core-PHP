<?php

function data($num1, $num2){
    $sum = $num1 + $num2;
    $sub = $num1 - $num2;
    $mul = $num1 * $num2;
    $div = $num1 / $num2;

    $solution = array ($sum, $sub, $mul, $div);
    return $solution;
}

$array_ret = data(20, 10);

for($i=0; $i<count($array_ret); $i++){
    echo $array_ret[$i] . "<br>";
}