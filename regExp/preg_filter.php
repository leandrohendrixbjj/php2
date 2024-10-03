<?php
/*
    preg_filter(pattern, replacement, input, limit, count)
    Retorna uma String ou Array que combine com o RegExp e 
    subistitui seu valor
*/
$input = [
  "It is 5 o'clock",
  "40 days",
  "No numbers here",
  "In the year 2000"
];
$replaceTo = ' ';

$data = preg_filter('/[0-9]/',$replaceTo, $input);

print_r($data);
