<?php
$nome1=array("Fulano","Beltrano","Sicrano","Adelaide");
$nome2=array("Fulano","Beltrano","Sicrano","Adelaide");
$nome3=array("Fulano","Beltrano","Sicrano","Adelaide");
$nome4=array("Fulano","Beltrano","Sicrano","Adelaide");
echo "<pre>";print_r($nome1);echo "</pre><hr>";
asort($nome1);
echo "<h3>asort</h3>";
echo "<pre>";print_r($nome1);echo "</pre>";
sort($nome2);
echo "<h3>sort</h3>";
echo "<pre>";print_r($nome2);echo "</pre>";
arsort($nome3);
echo "<h3>arsort</h3>";
echo "<pre>";print_r($nome3);echo "</pre>";
krsort($nome4);
echo "<h3>krsort</h3>";
echo "<pre>";print_r($nome4);echo "</pre>";
?>
