<?php


$data = [1, 2, 3, 4];

$sum = array_reduce($data, function ($carry, $item) {
  return $carry + $item;
},0);

echo $sum;