<?php
function imp_arr($arr){
 if(!is_array($arr)){
   echo "<b>Não array $arr!</b>";
   return null;
 }
 foreach($arr as $pos=>$valor)
   echo $valor."<br>";
}
$uf=array("SP","TO","PR");
imp_arr($uf);
imp_arr("RJ");
?>
