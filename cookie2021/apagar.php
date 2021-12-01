<?php
header("refresh: 5; url=index.php"); 
include "menu.php";
if(count($_COOKIE)>0){
	foreach ($_COOKIE as $pos => $valor) {
		setcookie($pos);
	}
	echo "<h1>Cookie excluído </h1>";
}
else{
	echo "<h1>Não existem cookies para excluir!</h1>";	
}	
?>
</body>
</html>