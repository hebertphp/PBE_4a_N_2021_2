<?php
$num=10;
$nota=9.5;
$login="admin";
$uf=array("SP","RJ","MG","ES");
echo "<pre>";print_r($GLOBALS);echo "</pre>";
echo "<br>Nota: ".$GLOBALS["nota"];
echo "<br>UF: ".$GLOBALS["uf"][0];
?>