<?php

if($_SERVER["REQUEST_METHOD"]=="GET"){
    echo "<h1>Acesso negado!</h1>";
    exit;
}

$txt_nome=(isset($_POST['txt_nome']))?$_POST['txt_nome']:"";
$txt_email=(isset($_POST['txt_email']))?$_POST['txt_email']:"";


if ($txt_nome == null && $txt_email==null){
    echo "Acesso negado!";
}

//echo "<pre>";print_r($_POST);echo "</pre>";

// $txt_nome=$_POST["txt_nome"];
// $txt_email=$_POST["txt_email"];

echo "Os dados enviados pelo formulario foram:<br><br>";
echo "Nome: " . $txt_nome . "<br>";
echo "E-mail: " . $txt_email . "<br>";
?>
