<?php 

/*
   ASORT: Organiza os valores do MENOR para MAIOR ( Ordem CRESENTE )   
   
   1-) Na organização as CHAVES são IGNORADAS, apenas os VALORES são considerados.
   2-) AS chaves do array são mantidos, isso que diferencia do sort
*/ 

$data = [
  3 => 'Laranja',
  2 => 'Banana',
  1 => 'Maça'
];

asort($data);

print_r($data);