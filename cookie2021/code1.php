<?php
setcookie("teste", "funciona?");
setcookie("apagar", "vou sumir!!",time()+20);
setcookie("usuario", "Eu Mesmo",time()+60*60);
echo "Cookies criados!<br>";
?>
<script>
document.cookie = "js_cookie=Javascript";	
</script>