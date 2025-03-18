<?php 

// Função recebe um booleano e retorna o mesmo

function getStatus(bool $status): bool{
  return $status;
}

$data = getStatus(true);

print_r("Valor: $data Tipo:" .gettype($data) );