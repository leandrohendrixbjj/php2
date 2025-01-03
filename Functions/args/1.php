<?php 

// Retorna o total de argumentos passado na função
function store(){
  $total = func_num_args();
  echo "Total de param enviados: $total";
}

store('Leandro','40','Rua A');