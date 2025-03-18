<?php

/* Passagem por referência indicada pelo &
   Name dentro da função tem um escopo GLOBAL graças ao &
*/

function add(&$name){
  $name = " Soares";
}

$name = 'Leandro';
add($name);
echo $name;