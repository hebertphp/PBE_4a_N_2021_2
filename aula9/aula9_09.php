<?php
function total() {
 $numeros = func_get_args(); $soma = 0;
 foreach($numeros as $pos=>$valor) {
   if(is_numeric($valor))
     $soma += $valor;
 }
 return $soma;
}
echo total(11.9,7.5,20,"teste");
?>
