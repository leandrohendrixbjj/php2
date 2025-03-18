<?php
/* 
  Determina quando uma variável é considerada vazia quando
    1-) Não exsite
    2-) Seu valor for iqual a false
    3-) Tipo undefined
    4-) Seu tipo é null
 */

// Todos os casos citados são verdadeiros 
$data = [
  1 => '',
  2 => "",
  3 => null,
  4 => false,
  5 => 0,
  6 => '0',
  7 => $active,
  8 => []
];

foreach ($data as $key => $value) {
  if (empty($value)) {
    echo "$key is empty \n";
  }
}
