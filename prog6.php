<?php
$file = 'count.txt';
$count = (int)strval(file_get_contents($file));
file_put_contents($file, $count + 1);
echo("You are visitor number:".$count);
?>