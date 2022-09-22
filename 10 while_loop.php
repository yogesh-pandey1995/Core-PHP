<?php

// While Loop

$num = 1;

while ($num <= 10) :
    echo $num . "<br>";
    $num++;
endwhile;

echo "code end <br>";


// Nested While loop
$r = 1;

while ($r <= 5) {
    $c = 1;
    while ($c <= 5) {
        echo $r * $c." ";
        $c++;
    }
    echo "<br>";
    $r++;
}

