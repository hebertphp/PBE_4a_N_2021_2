<?php
echo "Informações do navegador/SO: ".$_SERVER['HTTP_USER_AGENT'];
echo "<br>Nome do arquivo: " . $_SERVER['PHP_SELF'];
echo "<br>Method: ".$_SERVER["REQUEST_METHOD"];
echo "<hr>";
echo "<pre>";print_r($_SERVER);echo "</pre>";
?>
