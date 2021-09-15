<?php
$a=50;
$b=120;
$c=200;
$d=(($a>=$b) or ($a>=$c));
$e=(($a>=$b) || ($a<=$c));
var_dump($d);
echo "<br>";
var_dump($e);
?>