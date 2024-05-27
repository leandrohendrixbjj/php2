<?php

$data = ["Leandro", "Soares", "Ribeiro"];

// Isso vai reproduzir: Undefined variable
unset($data);

try {
  print_r($data);
} catch (Exception $error) {
  print_r($error);
}
