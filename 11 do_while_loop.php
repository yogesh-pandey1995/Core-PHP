<?php

// Do While Loop 

$num = 1;
do {
    echo $num . "<br>";
    $num++;
} while ($num <= 5);
echo "code end <br><br>";

// Nested Do While Loop
$r = 1;
do {
    $c = 1;
    do {
        echo $r * $c . " " ;
        $c++;
    } while ($c <= 5);
    echo "<br>";
    $r++;
} while ($r <= 5);