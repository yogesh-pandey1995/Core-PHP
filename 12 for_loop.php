<?php

// For Loop 
for ($i = 1; $i <= 10; $i++) :
    echo $i . "<br>";
endfor;

// Nested For Loop

for ($k = 1; $k <= 10; $k++) :
    for ($j = 1; $j <= 10; $j++) :
        echo $j * $k . " ";
    endfor;
    echo "<br>";
endfor;
