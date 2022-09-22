<?php

$user_data = array(
    array("yogesh", 25, "acer", "50k"),
    array("neeraj", 27, "dell", "30k"),
    array("manish", 21, "msi", "45k")
);
?>
<table border="1">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Laptop</th>
        <th>Laptop Price</th>
    </tr>
    <?php
    foreach ($user_data as $data) :
    ?>
        <tr>
            <?php
            foreach ($data as $value) :
            ?>
                <td>
                    <?php echo $value; ?>
                </td>
            <?php
            endforeach;
            ?>
        </tr>
    <?php
    endforeach;
    ?>
</table>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Age</th>
        <th>Laptop</th>
        <th>Laptop Price</th>
    </tr>
    <?php foreach ($user_data as $keys => $data) : ?>
        <tr>
            <?php
            foreach ($data as $key => $value) {
            ?>
                <td>
                    <?php echo " <b>" . $keys . $key . "</b> " . $value; ?>
                </td>
            <?php
            }
            ?>
        </tr>
    <?php echo "<br>";
    endforeach;
