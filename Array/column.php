<?php

$data = [
  [
    'id' => 1,
    'name' => 'Leandro',
    'age' => 40
  ],
  [
    'id' => 2,
    'name' => 'Soares',
    'age' => 50
  ],
  [
    'id' => 3,
    'name' => 'Ribeiro',
    'age' => 60
  ]
];

$columns = array_column($data, 'name');

print_r($columns);
