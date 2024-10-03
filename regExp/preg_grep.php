<?php

/*
  preg_grep: Pega itens de um array que estejam dentro da regExp  
*/
$input = [
  "Red",
  "Pink",
  "Green",
  "Blue",
  "Purple"
];

$data = preg_grep("/^p/i", $input);
print_r($data);
