<?php
$a=50;
$b=120;
$c=200;
$d=(($a<=$b) xor ($c<=$a));
$e=(($a>=$b) xor ($a>=$c));
var_dump($d);
echo "<br>";
var_dump($e);
?>