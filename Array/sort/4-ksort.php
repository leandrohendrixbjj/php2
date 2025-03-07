<?php 

/*
   KSORT: Organiza os valores do MENOR para MAIOR ( Ordem CRESENTE )   
   
   1-) Na organização os VALORES são IGNORADOS, apenas os chaves são consideradas.   
*/ 

$data = [
  'Laranja' => 3,
  'Banana' => 4,
  'Maça' => 5
];

ksort($data);

print_r($data);