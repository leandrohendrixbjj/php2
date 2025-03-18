<?php


// Valida se um valor está no array. Strict: valida o tipo/valor, iqual operador ===
$data = [1, 2, 3, 4];

$info = in_array('1', $data, false);

echo $info;
