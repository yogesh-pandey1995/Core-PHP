<?php

// Modifying Array

$name[0] = "Yogesh";
$name[1] = "Neeraj";
$name[2] = "Deepak";
$name[3] = "Pratham";
$name[4] = "Manish";

echo "Value of third array is : " . $name[3] . "<br>";

$name[3] = "Shivansh";

echo "Value of third array is : " . $name[3] . "<br>";

// Deleting Array

unset($name[4]);

echo $name[4];
