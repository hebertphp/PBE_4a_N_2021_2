<?php
$nome=(isset($_POST['txt_nome']))?$_POST['txt_nome']:"";
$txt_email=(isset($_POST['txt_email']))?$_POST['txt_email']:"";
echo "Os dados enviados pelo formulario foram:<br><br>";
echo "Nome: " . $nome . "<br>";
echo "E-mail: " . $txt_email . "<br>";
?>
