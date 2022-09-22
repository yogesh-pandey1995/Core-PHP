<?php

$num = 123;
$info =  <<<HEREDOC
<b>this is first line.</b><br>
<u>this is "<b>second</b>" line.</u><br>
<i>this is third line</i>. $num <br>
HEREDOC;

echo $info;

$now = <<<'NOWDOC'
<b>this is first line.</b><br>
<u>this is '<b>second</b>' line.</u><br>
<i>this is third line</i>. $num
NOWDOC;

echo $now;


