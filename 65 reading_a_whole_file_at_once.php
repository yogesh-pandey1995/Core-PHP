<?php

// Reading a whole file at once
# syntex : file_get_contents(file_name, include_path, context, offset, maxlen);

$file_data = file_get_contents("fopen.txt");
$improve_data = str_replace("\n", "<br>", $file_data);
echo "<b>This is a file data</b><br> $file_data <br>";

echo "<b>This is a Improve data</b><br> $improve_data <br>";

