<?php

if (unlink("show.txt")){
    echo "File Delete";
}
else {
    echo "File Not Delete";
}