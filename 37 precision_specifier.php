<?php

$x = 99;
$y = 55.99;
$z = "Yogesh";

printf ("%f <br>", $x);
printf ("%.2f <br>", $x);

printf ("%.2f <br>", $y);
printf ("%.3f <br>", $y);

printf ("%'*-10.3f <br>", $y);
printf ("%'*10.3f <br>", $y);

printf ("%s <br>", $z);
printf ("%.3s <br>", $z);
printf ("%'*10.3s <br>", $z);