<?php
$senha=isset($_GET["senha"])?$_GET["senha"]:"";


// echo $senha;
$cont=0;
$cad_senha="123@mudar";
if($senha==$cad_senha){
    echo "Acesso ok";
}
else{
    echo "Acesso negado!";
    $cont++;
}
echo "<br>cont = $cont";
/*
aula5_092.php?senha=123
*/
?>