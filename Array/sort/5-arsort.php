<?php 

/*
   ARSORT: Organiza os valores do MAIOR para MENOR ( Ordem DECRESENTE )   
   
   1-) Na organização as CHAVES são IGNORADAS, apenas os VALORES são considerados.
   2-) AS chaves do array são mantidos, isso que diferencia do sort
*/ 

$data = [
  1 => 'Laranja',
  2 => 'Banana',
  3 => 'Maça'
];

arsort($data);

print_r($data);