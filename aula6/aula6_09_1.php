<?php
$usuario = array(
 "login" => "admin",
 "senha" => "1234",
 "email" => "teste@teste.com"
);
$uf = array("SP","RJ","MG","ES");
$cont="";
foreach ($usuario as $pos => $valor) {
//  echo $pos . " - " . $valor . "<br/>";
 echo $pos." ";
 $cont.=$pos;
}
echo "<hr>".$cont;
?>
