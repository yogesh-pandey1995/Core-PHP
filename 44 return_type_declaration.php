<?php
declare(strict_types=1);        // This line declare Strict Mode 

// Coercive Mode  -----------------------------    Delault Type

function add(int $a, int $b) : float{
    $sum = $a+$b; 
    echo '$a is ' . gettype($a) . " type variable and value is = $a <br>";
    echo '$b is ' . gettype($b) . " type variable and value is = $b <br>";                           
    return($sum);
}

$total = add(13,21);

// Strict Mode
// $totle = add(13,"21"); ----------------Error Becouse $b is a string value. 
echo "Add 13+21 :" .$total . "<br>";

echo '$total is ' . gettype($total) . " type variable and value is = $total <br>"; 

