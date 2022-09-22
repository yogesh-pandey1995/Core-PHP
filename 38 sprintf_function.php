<?php

$a = 2;
$b = 4;
$c = 6;
$d = 8;

$data = sprintf("i have %2\$d laptops %4\$d mouses %3\$d keyboards and %1\$d UPS", $a, $b, $c, $d);

echo $data;