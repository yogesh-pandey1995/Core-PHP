<?php

// Multidimensional Indexed Array

/**
 * $user_data[0][0] = "yogesh";
 * $user_data[0][1] = "25";
 * $user_data[0][2] = "acer";
 * $user_data[0][3] = "50k";
 * 
 * $user_data[1][0] = "neeraj";
 * $user_data[1][1] = "27";
 * $user_data[1][2] = "dell";
 * $user_data[1][3] = "30k";
 * 
 * $user_data[2][0] = "manish";
 * $user_data[2][1] = "21";
 * $user_data[2][2] = "msi";
 * $user_data[2][3] = "45k";
 * 
 */
$user_data = array(
    array("yogesh", 25, "acer", "50k"),
    array("neeraj", 27, "dell", "30k"),
    array("manish", 21, "msi", "45k")
);
?>
<pre>
    <?php print_r($user_data); ?>
</pre>
<?php

// Multidimensional Indexed Array

/**
 * $fees =["yogesh"]["maths"]=550;
 * $fees =["yogesh"]["english"]=500;
 * $fees =["yogesh"]["science"]=450;
 * 
 * $fees =["neeraj"]["english"]=500;
 * $fees =["neeraj"]["science"]=450;
 * $fees =["neeraj"]["maths"]=550;
 * 
 * $fees =["manish"]["science"]=450;
 * $fees =["manish"]["maths"]=550;
 * $fees =["manish"]["english"]=500;
 *  
 */

$fees = array(
    "yogesh" => array("maths" => 550, "english" => 500, "science" => 450),
    "neeraj" => array("english" => 500, "science" => 450, "maths" => 550),
    "manish" => array("science" => 450, "maths" => 550, "english" => 500)
);
?>
<pre>
    <?php print_r($fees); ?>
</pre>