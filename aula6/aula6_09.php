<?php
$usuario = array(
 "login" => "admin",
 "senha" => "1234",
 "email" => "teste@teste.com"
);
foreach ($usuario as $pos => $valor) {
 echo $pos . " - " . $valor . "<br/>";
}
?>
