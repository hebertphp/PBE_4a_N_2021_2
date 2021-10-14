<?php
$aluno=array();//var do tipo array vazia
$aluno["curso"] = "TADS";
$aluno["nome"] = "Fulano";
$aluno["ra"] = 123456789;
$aluno[]="E agora???";//qual a posição? 0
//$aluno=array();//apaga o array!!!

echo "<pre>";print_r($aluno);echo "</pre>";
echo "<hr>Nome: <b>{$aluno["nome"]} </b>";
echo "<br>Ra: ".$aluno["ra"];
echo "<br>Curso: ".$aluno["curso"];
?>
