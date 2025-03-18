<?php 

// Função variádica: desempacotamentodeargumentos  

function info ($index,$a,$b,$c)
{
  echo "$index | $a | $b | $c";
}


$index = 1;
$dados = [3,4,5];

info($index,...$dados);


