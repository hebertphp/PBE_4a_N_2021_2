<?php
 $servidor = "localhost";
 $usuario = "root";
 $senha = "";
 $db="test";
 try {
   $conn = new PDO("mysql:host=$servidor;dbname=$db", $usuario, $senha);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Conexao efetuada com sucesso!";
 }
 catch(PDOException $e)
 {
   echo "Falha ao conectar com o servidor: " . $e->getMessage();
   exit;
 }
?>
