<?php
$nome=(isset($_GET['txt_nome']))?$_GET['txt_nome']:"";
$txt_email=(isset($_GET['txt_email']))?$_GET['txt_email']:"";
//$nome=$_GET['txt_nome'];
//$txt_email=$_GET['txt_email'];
echo "Os dados enviados pelo formulario foram:<br><br>";
echo "Nome: " . $nome . "<br>";
echo "E-mail: " . $txt_email . "<br>";

?>
