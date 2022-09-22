<?php

$marks = array(10, 20, 30, 40, 50);

function array_function($subject){
    $sum = 0;
    foreach($subject as $total){
        $sum = $sum + $total;   
    }
    echo $sum;
}
array_function($marks);

