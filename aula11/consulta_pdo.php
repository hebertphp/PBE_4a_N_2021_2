<?php
include "con_pdo.php";
$res= $conn->prepare("SELECT login, email FROM usuario");
$res->execute();

echo "<br>";
while($result = $res->fetch(PDO::FETCH_ASSOC)){
 echo $result["login"]." - ".$result["email"]."<br>";   
}
?>