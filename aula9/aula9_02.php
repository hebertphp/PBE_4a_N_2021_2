<?php
function boas_vindas() {
 echo "<h1>Seja bem vindo, ".$GLOBALS["alguem"]."!</h1>";
}
$alguem="Roberta"; 
boas_vindas();
?>
