<?php

// Escrever em um arquivo ( Cria )

$data = file_get_contents('../../data.json');

print_r($data);

// Cria um arquivo json
file_put_contents(__DIR__ . '/dados.json', $data);

