<?php 
date_default_timezone_set('America/Sao_Paulo');

$dt = new DateTime('2023-05-01'); 
$diff = date_diff($dt, new DateTime())->format("%d");

echo "A diferença em dias são: $diff";
