<?php

// Retorna um array contendo os resultados da aplicação da função callback

function multiply($value)
{
    return $value *= $value;
}

$nums = [2, 3, 5];

$dados = array_map('multiply', $nums);

print_r($dados);
