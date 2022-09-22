<?php

function outer_function()
{
    echo "Outer Function <br>";
    function inner_function()
    {
        echo "Inner Function";
    }
}
outer_function();
inner_function();
