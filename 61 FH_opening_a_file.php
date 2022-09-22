<?php

// syntex : fopen(file_name, mode, include_path, context);

$file_handling = fopen('fopen.txt', 'r');

if ($file_handling == TRUE){
    echo "DONE";
}
else{
    echo "NOTE DONE";
}