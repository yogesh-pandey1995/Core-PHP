<?php

function data($first, $last){
    echo "full name : $first $last <br>";
}

function display($first, $last, $class=10){
    echo "full name : $first $last | class : $class <br>";
}

function null_data($name, $roll_no, $address=NULL){
    if ($address == NULL):
        //echo $address;
        echo "sorry data not found";
    else:
        echo "your name is $name and your roll no is $roll_no addess \"$address\"";
    endif;
}

data("Yogesh", "Pandey");
display("Manish", "Pandey", 5);
null_data("neeraj", 123, "india");