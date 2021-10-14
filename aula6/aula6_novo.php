<?php
$alunos[]="E agora??";//qual a posição do "E agora??"
$alunos[1]="joao";
$alunos[2]="maria";
$alunos[3]="naruto";
$alunos[4]= "goku";
//$alunos[]="E agora??";//qual a posição do "E agora??"

$alunos1=array("Aluno 1", "Aluno 2","Aluno 3", "Aluno 4");

echo $alunos1[0]." - ".$alunos[4]."<br>";
 //comando para gerar a saída: Aluno 1 - goku

echo "<pre>";print_r($alunos1);echo "</pre>";

?>