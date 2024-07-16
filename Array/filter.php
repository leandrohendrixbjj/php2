<?php
// Retorna apenas os valores maiores que 7

$data = [5, 6, 7, 8, 9, 10];

$data = array_filter($data, function ($value) {
  return $value > 7;
});

print_r($data); 