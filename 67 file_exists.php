<?php

if (file_exists("fopen.txt")) {
    $data = file("fopen.txt");

    for ($i = 0; $i < count($data); $i++) {
        echo "$data[$i] <br>";
    }
}
