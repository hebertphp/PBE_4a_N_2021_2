<?php
 define("HOST","localhost");
 define("USER","root");
 define("PASS","");
 define("DB","test");
 $conn = mysqli_connect(HOST, USER, PASS, DB);
 if (!$conn) {
   die("Falha ao conectar com o servidor: " . mysqli_connect_error());
 }
 else {
   echo "Conexao efetuada com sucesso!";
 }
 //mysqli_close($conn);
?>
