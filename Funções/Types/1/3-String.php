<?php

// Função recebe uma String e retorna a mesma

function getName(string $name): string
{
  return $name;
}

$data = getName('Soares');

print_r("Nome: $data Tipo:" . gettype($data));