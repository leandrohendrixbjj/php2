<?php

$items = [
  ['category' => 'fruit', 'name' => 'apple'],
  ['category' => 'vegetable', 'name' => 'carrot'],
  ['category' => 'fruit', 'name' => 'banana'],
  ['category' => 'vegetable', 'name' => 'broccoli'],
];

$grouped = array_reduce($items, function($carry, $item){
  $carry[$item['category']][] = $item['name'];
  return $carry;
}, []);

echo "<pre>";
print_r($grouped);
echo "</pre>";
