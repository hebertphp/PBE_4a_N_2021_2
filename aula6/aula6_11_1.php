<?php
$nomes=array("Fulano","Beltrano","Sicrano","Beltrano","Fulano");
$resultado=array_unique($nomes);
echo count($nomes)."<br>";//5
echo count($resultado)."<br>";//3
foreach($resultado as $pos=>$valor){
 echo "Nomes[$pos]: " . $valor;
 echo "<br>";
}
?>
