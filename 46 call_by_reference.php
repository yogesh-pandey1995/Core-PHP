<?php

$a = 6;
echo 'Value Of $a is ' ."$a <br>";

function data(&$n){
    echo "$n <br>";
    $n = 10;
    echo "$n <br>";
}

data($a);

echo "$a";