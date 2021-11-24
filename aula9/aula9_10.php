<?php
function total(...$num) {
 $soma = 0;
 foreach($num as $pos=>$valor) {
   if(is_numeric($valor))
     $soma += $valor;
 }
return $soma;
}
echo total(11.9,7.5,2.9,"teste");
?>
