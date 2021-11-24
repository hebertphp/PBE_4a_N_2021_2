<?php
function total() {
 $numeros = func_get_args(); $qtd_nums = func_num_args();
 $soma = 0;
 for($i = 0; $i < $qtd_nums; $i++) {
   if(is_numeric($numeros[$i]))
     $soma += $numeros[$i];
 }
 return $soma;
}
echo total(10,7.5,20,"teste");
?>
