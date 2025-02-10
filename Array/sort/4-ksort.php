<?php 

/*
   KSORT: Organiza os valores do MENOR para MAIOR ( Ordem CRESENTE )   
   
   1-) Na organização os VALORES são IGNORADOS, apenas os chaves são consideradas.   
*/ 

$data = [
  3 => 'Laranja',
  2 => 'Banana',
  1 => 'Maça'
];

ksort($data);

print_r($data);