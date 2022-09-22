<?php

if (file_exists("fopen.txt")) {
    echo filesize("fopen.txt") . "bytes";
}