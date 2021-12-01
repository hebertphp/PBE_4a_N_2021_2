<?php
include "menu.php";
if(count($_COOKIE)==0){
	setcookie('usuario', 'admin');
	setcookie('email', 'admin@teste.com', (time() + (30)));
	echo "<h1>Cookie criado (2)!</h1>";
}
elseif(count($_COOKIE)==1){
	echo "<h1>Cookie já criado (1)!</h1>";
}
else{
	echo "<h1>Cookie já criado (2)!</h1>";
}	
?>
</body>
</html>