<?php
/*
  Impressão das chaves de um array
*/
$dados = [
  "color" => array("blue", "red", "green"),
  "size"  => array("small", "medium", "large")
];

print_r(array_keys($dados)) . PHP_EOL;

print_r(array_keys($dados['size'])) . PHP_EOL;
