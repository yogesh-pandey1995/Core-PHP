<?php

$a = 10;

function display(){
    global $a;  
    echo "below code won't work, can't access \$a inside function <br>";
    echo "Assessing value inside function = $a <br>";
}
display();
echo "Assessing value outside function = $a <br>";