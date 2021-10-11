<?php
$tipos=array("image/gif","image/jpg","image/jpeg","image/png");
$tam_limite=200000;
$dir="./img/";
if(!is_dir($dir)){
     mkdir($dir, 0700);
}

$arq=array(
    "nome"=>$_FILES["file"]["name"],
    "tipo"=>$_FILES["file"]["type"],
    "tam" =>$_FILES["file"]["size"],
    "temp"=>$_FILES["file"]["tmp_name"]
);
// echo "<pre>";print_r($arq);echo "</pre>";
// number_format($number, 2, ',','.');

if(!(in_array($arq["tipo"], $tipos)&&($arq["tam"] < $tam_limite))){
    echo "<h2>Algo de errado não está certo!</h2:";
    exit;
}
echo "Arquivo: {$arq["nome"]}<br>";
echo "Tipo: {$arq["tipo"]} <br>";
echo "Tamanho: " . (number_format($arq["tam"] / 1024, 2, ',','.')) . " Kb<br />";
echo "Arquivo temporário: {$arq["temp"]}<br>";

if (file_exists($dir.$arq["nome"])){
    echo "<h2> Arquivo: {$arq["nome"]} já existe!</h2>";
}
else {
    move_uploaded_file($arq["temp"],$dir . $arq["nome"]);
    echo "<h2> Salvo em: $dir{$arq["nome"]}</h2>";
}
?>
<br>
<img src="<?php echo $dir.$arq["nome"];?>">