<?php

if (copy("fopen.txt", "show.txt")){
    echo "File Copied";
}
else {
    echo "File Not Copied";
}