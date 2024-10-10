<?php

/* 
  Procura o valor em por toda a string
*/  

$str = "The rain in SPAIN falls mainly on the plains.";
$find = preg_match_all("/ain/i", $str, $matches);

if($find) {
  print_r($matches);
}