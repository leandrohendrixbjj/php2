<?php

// Emenda um novo valor dentro do array pode ser no inicio,meio ou fim

$data = ['Leandro', 'Ribeiro'];
$position = 1;
$action = 0; // 0 => add, 1 => Remove/Replace

array_splice($data, $position, $action, 'Soares');

array_splice($data, $position, $action);
