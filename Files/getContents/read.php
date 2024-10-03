<?php 

// Ler um arquivo

$file = file_get_contents('../../data.json');

// Array Associativo
$data = json_decode($file, true);

echo "<pre>";
print_r($data);
echo "</pre>";