<?php

for ($i = 1; $i <= 10; $i++) {
    echo $i;
    if ($i == 5) {
        $i = $i - 1;
        continue;
    }
    echo "hello Yogesh<br>";
}
