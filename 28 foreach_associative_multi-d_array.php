<?php

$fees = array(
    "yogesh" => array("maths" => 550, "english" => 500, "science" => 450),
    "neeraj" => array("english" => 500, "science" => 450, "maths" => 550),
    "manish" => array("science" => 450, "maths" => 550, "english" => 500)
);
?>
<table border="1">
    <tr>
        <th>NAME</th>
        <th>SUBJECT</th>
        <th>FEES</th>
    </tr>
    <?php
    foreach ($fees as $keys => $data) :
        foreach ($data as $key => $value) : ?>
            <tr>
                <?php echo "<th>" . $keys . "</th><td>" . $key . "</td><td>" . $value . "</td>"; ?>
            </tr>
    <?php
        endforeach;
    endforeach;
