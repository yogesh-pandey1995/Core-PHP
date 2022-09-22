<?php

echo "enter number between 1 to 10 <br>";
function error_function($a)
{
    if ($a <= 10) :
        echo "value of \$a is $a <br>";
        return TRUE;
    else:
        return FALSE;
    endif;
}
error_function(10) || die("ERROR: Please Enter Number Between 1 to 10");
echo "After die Text";