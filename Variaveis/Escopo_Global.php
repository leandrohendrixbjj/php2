<?php 

// Escopo Global, reconhece o valor atribuido localmente em uma função
$name = 'Leandro';

function update($value){
  global $name;
  $name = $value;
}

update('Soares');

echo "Nome: $name";