<?php

// Determine whether a variable is considered to be empty. 
// A variable is considered empty if it does not exist or if its value equals false. 

if (empty($data))
  echo "TRUE. Data doesn't exists" . PHP_EOL;

$data;
if (empty($data))
  echo "TRUE. Data has no value" . PHP_EOL;

$data = null;
if (empty($data))
  echo "TRUE. Data has value equal NULL" . PHP_EOL;

$data = false;
if (empty($data))
  echo "TRUE. Data has value equal FALSE" . PHP_EOL;
