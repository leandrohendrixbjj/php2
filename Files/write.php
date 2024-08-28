<?php

$data = file_get_contents('../Arquivos/index.json');

// Cria um arquivo json
file_put_contents(__DIR__ . '/dados.json', $data);

