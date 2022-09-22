<?php

function add(int $a, int $b){
    $sum = $a+$b;                               // int type declaration
    return($sum ."<br>");
}

$totle = add(5,8);
echo "Add " .$totle;

function sub(float $x, float $y){
    $sub = $x-$y;                               // Float type declaration
    return($sub ."<br>");
}

echo "Sub " . sub(5.6, 4.1);