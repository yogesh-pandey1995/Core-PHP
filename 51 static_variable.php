<?php

function display()
{
    static $a = 0;
    $a++;
    return $a;
}

for ($i = 0; $i < 10; $i++) {
    echo display() . "<br>";
}
