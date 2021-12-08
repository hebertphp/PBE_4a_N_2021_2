<?php
include "conecta.php";
$login='hba2';
$senha='1234';
$senha_hash = password_hash($senha, PASSWORD_DEFAULT);
$email='hba2@teste.com';
$obs='Será que funciona?';
$sql="insert into usuario values (null, '$login','$senha_hash','$email',now(),'$obs')";
// echo $sql;
$query = mysqli_query($conn,$sql) or die (mysqli_error($conn));
echo "<h2>Insert OK!</h2>";

mysqli_close($conn);
?>
