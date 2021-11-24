<?php
function bebida($tipo = "chá"){
   return "Fazendo uma xícara de $tipo";
}
echo bebida()."<br>";
echo bebida(null)."<br>";
echo bebida("café coado")."<br>";
?>
