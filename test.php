<?php

if (($_REQUEST["username"] != "") && ($_REQUEST["password"] != "")) :

    if ($_REQUEST["username"] && $_REQUEST["password"]) :
        echo "Your User Name Is : " . $_REQUEST["username"];
        echo "<br>Your Password Is : " . $_REQUEST["password"] . "<br>";
    endif;
else :
    echo "Please Enter User Name | Password <br>";
endif;

if(isset($_REQUEST["lag1"])){
    echo $_REQUEST["lag1"] . "<br>";
}
if(isset($_REQUEST["lag2"])){
    echo $_REQUEST["lag2"] . "<br>";
}
if(isset($_REQUEST["lag3"])){
    echo $_REQUEST["lag3"] . "<br>";
}

if(isset($_REQUEST["gender"])){
    echo $_REQUEST["gender"] . "<br>";
}

if(isset($_REQUEST["cars"])){
    foreach($_REQUEST["cars"] as $value):
    echo $value . "<br>";
   endforeach;
}
// ?><pre><?php
// print_r($_FILES["myfile"])
// ?><pre><?php
if(move_uploaded_file($_FILES["myfile"]["tmp_name"], "images/".$_FILES["myfile"]["name"])){
    echo "upload successful";
}

if (isset($_REQUEST["family"])){
    $data = $_REQUEST["family"];
    echo str_replace("\n", "<br>", $data) . "<br>";
}

if(isset($_REQUEST["dob"])){
    $new_date = date('d-m-Y', strtotime($_REQUEST['dob']));
    echo $new_date . "<br>";
}