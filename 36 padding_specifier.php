<?php


$a = "Hello";
$b = "Yogesh Pandey";
$c = 9888066739;
$d = "hey";

printf ("%015s <br>", $a);  // 0 - Space    ### right to left
printf ("%'#15s <br>", $b); // '#           ### right to left
printf ("%'*15d <br>", $c); // '*           ### right to left
printf ("%'=-15s <br>", $d); // '=  -15     ### left to right
