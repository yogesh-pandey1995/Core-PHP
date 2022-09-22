<?php

$fees = array("yogesh" => 500, "manish" => 400, "shivansh" => 300, "pratham" => 200, "anmol" => 100);

// echo "Manish Fees : {$fees["manish"]} <br>";

$keys = array_keys($fees);

for ($i = 0; $i < count($keys); $i++) {
    echo "value of \$keys[$i] : <b>" . $keys[$i] . "</b> and fees is : <b>" .  $fees[$keys[$i]] . "</b><br>";
}
