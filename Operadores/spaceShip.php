<?php

/* 
  Valor da Esquerda (MAIOR): retorna -1
  Valor da Esquerda (MENOR): retorna 1
  Iquais: retorna 0
*/

$a = 5;
$b = $c = 9;

echo ($a <=> $b) . PHP_EOL; // -1 Esquerda Menor
echo ($b <=> $c) . PHP_EOL; // 0 Para valores iguais
echo ($c <=> $a) . PHP_EOL; // 1 valor da esquerda maior