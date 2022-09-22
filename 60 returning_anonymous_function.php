<?php

function display($str)
{
    return function () use ($str) {
        return ("$str Returning Anonymous Function");
    };
}
$a = display("Hello");
echo $a();
