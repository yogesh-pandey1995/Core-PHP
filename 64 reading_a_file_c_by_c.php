<?php

// Reading a file Character by Character

$file_handling = fopen('fopen.txt', 'r');


while ($data = fgetc($file_handling)) :
    if($data == "\n"):
        echo "<br>";
    endif;
    echo $data;
endwhile;

fclose($file_handling);