<?php

if (file_put_contents("fopen.txt", " New Line Content", FILE_APPEND) == FALSE ){
    echo "Could not write a file";
}
else{
    echo "write successful";
}