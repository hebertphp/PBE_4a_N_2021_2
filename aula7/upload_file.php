<?php
echo "Arquivo: " . $_FILES["file"]["name"]."<br/>";
   echo "Tipo: " . $_FILES["file"]["type"]."<hr/>";
echo "<pre>";
print_r($_FILES);
echo "</pre>";
?>
