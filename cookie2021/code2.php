<?php
echo "<pre>";print_r($_COOKIE);echo "</pre>";
$usuario = $_COOKIE['usuario'];
$teste= $_COOKIE['teste'];
$apagar=$_COOKIE['apagar'];
$js_cookie=$_COOKIE['js_cookie'];
echo "Usuario: $usuario<br>";
echo "Teste: $teste<br>";
echo "Apagar: $apagar<br>";
echo "JsCookie: $js_cookie<br>";
?>