<?php

function total(...$num) {
    $soma = 0;
    foreach($num as $pos=>$valor) {
    if(is_numeric($valor))
    $soma += $valor;
    }
    return $soma;
    }
    echo total(11.9,7.5,2.9,"teste");
/*
Criar uma função nomeada media( ) para calcular a média de notas apenas para
valores numéricos entre 0 e 10 para qualquer quantidade de notas passadas. O valor de
saída deve estar formatado.
Exemplos:
echo media(10,7); //saída: 8,5
echo media(10,10,8);//saída: 9,33
echo media(9,6.5,"teste");//saída: 7,75
echo media(9,6,11,-5);////saída: 7,50
*/
?>