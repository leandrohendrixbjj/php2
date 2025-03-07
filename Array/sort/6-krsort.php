<?php 

/*
   KRSORT: Organiza os valores do MAIOR para MENOR ( Ordem DECRESENTE )   
   
   1-) Na organização os VALORES são IGNORADOS, apenas os chaves são consideradas.   
*/ 

$data = [
  'Banana' => 2,
  'Laranja' => 1,
  'Maça' => 3
];

ksort($data);

print_r($data);