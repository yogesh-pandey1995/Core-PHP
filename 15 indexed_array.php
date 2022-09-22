<?php

// indexed/numeric array

/**
 *      $name[0] = "Yogesh";
 *      $name[1] = "Neeraj";
 *      $name[2] = "Deepak";
 *      $name[3] = "Pratham";
 *      $name[4] = "Manish";
 * 
 *      echo "Value of fourth array is : " . $name[3] . "<br>";
 */

$name = array("yogesh", "neeraj", "deepak", "pratham", "manish");
echo "Value of second array is : " . $name[1];

// Using For Loop

for ($i = 0; $i < count($name); $i++) :
    echo "\$name[$i] = " . $name[$i] . "<br>";
endfor;
