<?php 

// Forma contraída de aplicar a operador ternário

$expresion = 20 == '20';

$data = $expresion ?: false;

if ($data){
  echo "Expresion is $data";
}else{
  echo "Expresion is false";
}