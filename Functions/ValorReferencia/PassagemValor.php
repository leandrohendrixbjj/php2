<?php

// Passagem por referência indicada pelo &.  Passagem é por valor(mais comum)

function add(&$name){
  $name .= " Soares";
}

$name = 'Leandro';
add($name);
echo $name;