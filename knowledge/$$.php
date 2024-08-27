<?php 

// Quando usamos $$ o php procura uma variável 
// Que tenha o nome que está atribuido na variavel $outra, nesse caso cor

$cor = "AZUL";

$outra = "cor";

echo $outra . PHP_EOL;

echo $$outra;

