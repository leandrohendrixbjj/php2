<?php 

/*
  Se o comando for break 2 ambos os blocos serão interrumpidos,
  se aplicar apenas o break nesse caso a interrupção fica apenas
  no bloco J
*/

$i=0;
$j=0;

while($i < 10){
  while($j < 10){
    if ($j == 5){
      break 2;  //interrompe os DOIS laços
    }
    $j++;
    echo "Você está na linha J: $j \n";
  }
  $i++;
  echo "Você está na linha i: $i \n";
}