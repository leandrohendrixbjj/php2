<?php

// Retorna o primeiro valor encontrado

$data = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('red', $data);   // $key = 1;

echo $key;
