<?php
if(count($_COOKIE)==0){
	echo "
	<script>
		alert('Nenhum cookie encontrado!');
		window.location.href = 'index.php';
	</script>";
	// header("location: index.php");
	exit;
}
include "menu.php";
echo "<h1>Verificado, Cookie = (".count($_COOKIE).")</h1>";
foreach($_COOKIE as $pos=>$valor){
		echo "$pos: $valor<br>";
}
?>
</body>
</html>