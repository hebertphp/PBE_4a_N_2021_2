<?php
echo "<pre>";print_r($_COOKIE);echo "</pre>";
foreach($_COOKIE as $pos=>$valor){
    $$pos=$valor;
}

// $usuario = $_COOKIE['usuario'];
// $teste= $_COOKIE['teste'];
$apagar=isset($_COOKIE['apagar'])?$_COOKIE['apagar']:"";
// $js_cookie=$_COOKIE['js_cookie'];
echo "Usuario: $usuario<br>";
echo "Teste: $teste<br>";
echo "Apagar: $apagar<br>";
echo "JsCookie: $js_cookie<br>";
?>