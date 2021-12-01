<?php
include "menu.php";
$usuario=(isset($_COOKIE['usuario']))?$_COOKIE['usuario']:"";
$email=(isset($_COOKIE['email']))?$_COOKIE['email']:"";
echo "Usuario: ".$usuario."<br>";
echo "E-mail: ".$email."<br>";
echo "<pre>";print_r($_COOKIE);echo "</pre>";
?>
</body>
</html>