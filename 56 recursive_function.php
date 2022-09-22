<?php

function recursive_function($a)
{
    if ($a < 10) {
        echo "value of \$a is $a <br>";
        recursive_function($a + 1);
    }
}
recursive_function(1);
