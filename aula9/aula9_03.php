<?php
function boas_vindas1() {
 $quem=isset($GLOBALS["alguem"])?$GLOBALS["alguem"]:"você mesmo"; 
 echo "<h1>Seja bem vindo, $quem!</h1>";
 }
$alguem="Roberta"; 
boas_vindas1();
?>
