<?php

$file_handling = fopen("fopen.txt", "a");

if (fwrite($file_handling, " This is new text") == FALSE){
    echo "Could not write a file";
}
else{
    echo "write successful";
}

fclose($file_handling);