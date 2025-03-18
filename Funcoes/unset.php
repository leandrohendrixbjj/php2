<?php

// Remove a definição de uma variável informada  

$active = true;

unset($active);

if (!isset($active)){
  echo "Active não é isset \n";
}

if (empty($active)){
  echo "Active é Empty";
}
