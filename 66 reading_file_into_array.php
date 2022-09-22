<?php

$data = file("fopen.txt");

for ($i = 0; $i < count($data); $i++) {
    echo "$data[$i] <br>";
}
