<?php

// Determine if a variable is declared and is different than null

$data = '';
if ( isset($data) )
  echo "TRUE. Data has value EQUAL '' " . PHP_EOL;

$data = false;
if ( isset($data) )
  echo "TRUE. Data has value EQUAL FALSE" . PHP_EOL;    

$data = null;
if (!isset($data))
  echo "FALSE. Data has value EQUAL null" . PHP_EOL;
