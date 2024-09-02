<?php 

$file = file_get_contents('../Arquivos/index.json');

// Array Associativo
$data = json_decode($file, true);

echo "<pre>";
print_r($data);
echo "</pre>";