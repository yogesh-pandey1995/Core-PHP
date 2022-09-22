<?php

$file_handling = fopen('fopen.txt', 'r');

 $data = fread($file_handling, "30");                            // Read 30 charcaters in a File
// $data = fread($file_handling, filesize("fopen.txt"));        // Read a full file
$new_data = str_replace("\n", "<br>", $data);   // Break a line

echo $new_data;

fclose($file_handling);