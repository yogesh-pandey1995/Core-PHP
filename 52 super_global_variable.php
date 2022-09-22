<?php

// super_globle are built-in variable that are always available in all scopes.
# $GLOBALS
# $_SERVER
# $_REQUEST
# $_GET
# $_POST
# $_FILES
# $_ENV
# $_SESSION
# $_COOKIES

$a = 10;
$b = 15;

function display()
{
    echo $GLOBALS['a'] . "<br>";
    echo $GLOBALS['b'];
}
display();
