<?php 

// Escreve no arquivo
$file = fopen("data.txt","w");

echo fwrite($file, "Writing at file throught fwrite");

fclose($file);