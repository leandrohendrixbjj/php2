<?php

// Variáveis e “variáveis variáveis

$name = 'leandro';
$leandro = 'soares' . PHP_EOL;

echo $$name; // Soares

$pais = 'Brasil';
$$pais = 'Nova Zelandia';

echo $Brasil . PHP_EOL; // Nova Zelandia
echo $$pais . PHP_EOL; // Nova Zelandia
echo $pais; // Brasil