<?php
$nomes=array("Fulano","Beltrano","Sicrano", "Astrogildo","Belarmino","Abelardo","Pafuncia");
//             0         1          2           3
$total = count($nomes);//7
$ult = count($nomes)-1;//6
echo "Foram encontradas $total nomes no array.<br>";
echo "Primeiro valor do array: ".$nomes[0]."<br>";//Fulano
echo "Penúltimo valor do array: ".$nomes[count($nomes)-2];//Abelardo
echo "<hr>";
for($i=0;$i<count($nomes);$i++){
 echo $nomes[$i]."<br>";
}
?>