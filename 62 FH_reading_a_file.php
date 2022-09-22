<?php

// syntex : fopen(file_name, mode, include_path, context);

$file_handling = fopen('fopen.txt', 'r');

while(!feof($file_handling)){
    $data = fgets($file_handling);
    echo "$data <br>";
}

