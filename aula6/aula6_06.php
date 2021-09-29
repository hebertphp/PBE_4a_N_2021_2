<?php
$aluno = array (
 0 => "TADS",
 1 => "Fulano",
 2 => 123456789 );
echo "<pre>";print_r($aluno);echo "</pre>";
echo "<hr>Nome: ".$aluno[1];
echo "<br>Ra: ".$aluno[2];
echo "<br>Curso: ".$aluno[0];
?>
