<?php

// Função recebe um inteiro e retorna o mesmo

function getAge(int $age): int
{
  return $age;
}

$data = getAge(30);

print_r("Idade: $data Tipo:" . gettype($data) );
