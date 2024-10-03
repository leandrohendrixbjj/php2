<?php

// Ler somente uma linha 
$file = fopen("data.txt", "r");

echo fgets($file);

fclose($file);