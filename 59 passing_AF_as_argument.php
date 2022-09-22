<?php

function display($a_function)
{
    return $a_function();
}

echo display(
    function () {
        return ("Hello YogeshPandey");
    }
);
