<?php 

/*
  Comando continue dentro do bloco  while
   Você está na linha: 0
   Você está na linha: 1
   Você está na linha: 2
   Você está na linha: 3
   Você está na linha: 9
*/

$row = 0;

while($row < 10){
   if ( ($row >= 4) and ($row <=8)){
    $row++;
    continue;
   }
   echo "Você está na linha: $row \n";
   $row++;
}
