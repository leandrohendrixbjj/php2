<?php 

// Lendo 10 bytes do arquivo

$file = fopen("data.txt","r");

echo fread($file, "10");

fclose($file);