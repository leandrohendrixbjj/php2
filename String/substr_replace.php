<?php

// Substitui o texto dentro de uma parte de uma string

$nome = 'eandro';

echo "1=> " . substr_replace($nome, 'L', 0,0) . PHP_EOL; // Add L no inicio da STR

echo "2=> " . substr_replace($nome, 'Soares',0) . PHP_EOL; // Substitui por Soares

echo "3=> " . substr_replace($nome, 'X',2,2) . PHP_EOL; // Substitui por por X

echo $nome;
  