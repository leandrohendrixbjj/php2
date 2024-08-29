<?php

// O operador <=> é utilizado para fazer comparações combinadas.

$a = 5;
$b = 4;
$c = 5;
$d = 20;

echo ($a <=> $b) . PHP_EOL; // 1 valor da direita maior
echo ($a <=> $c) . PHP_EOL; // 0 Para valores iguais
echo ($b <=> $d) . PHP_EOL; // -1 valor da esquerda maior