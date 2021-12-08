<script>
document.cookie = "js_cookie=; expires=Thu, 01 Jan 1970 00:00:00 GMT";
</script>
<?php
setcookie("teste");
setcookie("apagar");
setcookie("usuario");
echo "<h1>Apagou?</h1>";
echo "<pre>";print_r($_COOKIE);echo "<pre>";
?>
