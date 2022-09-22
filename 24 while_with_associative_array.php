<?php

$fees = array("yogesh" => 500, "manish" => 400, "shivansh" => 300, "pratham" => 200, "anmol" => 100);
$keys = array_keys($fees);
$i = 0;
while ($i < count($keys)) {
    echo $keys[$i] . " fees is " . $fees[$keys[$i]] . "<br>";
    $i++;
}
