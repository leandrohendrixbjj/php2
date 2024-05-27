<?php

$name = 'leandro';

$data = match ($name) {
  'leandro' => 'First',
  'soares' => 'Second',
  'ribeiro' => 'Last'
};

print_r($data);
