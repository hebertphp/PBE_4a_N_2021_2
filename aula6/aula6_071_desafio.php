<?php
/*
Desafio:

Montar uma variável do tipo array, bidimensional onde a primeira
dimensão é numérica e a segunda dimensão é um array associativo
para guardar valores de uma aluno como nome, ra, nota.

Exemplo:
echo $aluno[0]["nome"];
$arr   =array("nome"=>"Dione","ra"=>"919103768", "nota"=>"9");
$aluno1=array("nome"=>"Fulano","ra"=>123456789,"nota"=>10);
*/

$aluno = array(
            array(        "Anacleto",      789,                9.5),
            array(     0=>"Hebert",   1=>"1234",            2=>9.75),
            array("nome"=>"Dione", "ra"=>"919103768",  "nota"=>9),
            array("nome"=>"Fulano","ra"=>123456789,    "nota"=>10)
        );
echo $aluno[2]["nome"]." ".$aluno[0][2];

echo "<hr>";
echo "Nome: ".$aluno[2]["nome"]."<br>";
echo "Ra:".   $aluno[2]["ra"]."<br>";
echo "Nota:". $aluno[2]["nota"]."<hr>";

echo "Nome: ".$aluno[3]["nome"]."<br>";
echo "Ra:".   $aluno[3]["ra"]."<br>";
echo "Nota:". $aluno[3]["nota"]."<hr>";


?>