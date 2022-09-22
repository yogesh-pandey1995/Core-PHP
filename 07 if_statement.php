<?php

$num = 51;

// If Statement

if ($num < 100) :
    echo "$num is less than 100" . "<br>";
endif;

// If-else Statement

if ($num % 2 == 0) :
    echo "$num is even number" . "<br>";
else :
    echo "$num is odd number" . "<br>";
endif;

// If-else-if Statement

$marks = 69;
if ($marks < 33) {
    echo "fail" . "<br>";
} else if ($marks >= 34 && $marks < 50) {
    echo "D grade" . "<br>";
} else if ($marks >= 50 && $marks < 65) {
    echo "C grade" . "<br>";
} else if ($marks >= 65 && $marks < 80) {
    echo "B grade" . "<br>";
} else if ($marks >= 80 && $marks < 90) {
    echo "A grade" . "<br>";
} else if ($marks >= 90 && $marks < 100) {
    echo "A+ grade" . "<br>";
} else {
    echo "Invalid input" . "<br>";
}

// Nested If Statement

$age = 17;
$nationality = "Indian";
//applying conditions on nationality and age  
if ($nationality === "Indian") {
    if ($age >= 18) {
        echo "Eligible to give vote" . "<br>";
    } else {
        echo "Not eligible to give vote" . "<br>";
    }
}

?>
