<?php

// Normal Function
function display()
{
    echo "NORMAL FUNCTION <br>";
}
display();

// #1. Anonymous Function                           
$anonymous_function = function () {
    echo "ANONTMOUS FUNCTION <br>";
};
$anonymous_function();

// #2. Variable Scope In Anonymous Function

#method I
$a = 20;    // Global Variable
$b = 40;    // Global Variable
$anonymous_function = function ($a) {
    echo "ANONTMOUS FUNCTION $a <br>";
};
$anonymous_function($a);

#method II
$anonymous_function = function() use ($b) {
    echo "ANONTMOUS FUNCTION $b <br>";
};
$anonymous_function();
