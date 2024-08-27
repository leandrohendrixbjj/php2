<?php 

// Verifica se o objeto ou a classe tem uma propriedade

$data = [
  'name', 
  'age' => '30'
];

print_r($data);

var_dump(property_exists((object) $data, 'name')); // True

var_dump(property_exists((object) $data, 'age')); // True
