<?php 

// KSORT: Ordena em order CRESENTE baseado nas chaves do array

$data = [
  'B' => 30,
  'C' => 1,
  'A' => 10
];

ksort($data);

print_r($data);