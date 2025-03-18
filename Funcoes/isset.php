<?php

/*
  Retorna true se uma variável está definida ou seja
  se é diferente de null ou ela existe
*/

$data = [
  1 => '',
  2 => "",
  3 => [],
  4 => false,
  5 => 0,
  6 => '0',
  7 => null,
  8 => $active
];

foreach ($data as $key => $value) {
  if (isset($value)) {
    echo "$key is Isset \n";
  }
}
