<?php

// Obtem todos os argumentos passados em uma função
function foo()
{
  $argList = func_get_args();

  if (count($argList) > 2) {
    echo "Second argument is: " . func_get_arg(1), PHP_EOL;
  } else {
    echo "First argument is: " . func_get_arg(0), PHP_EOL;
  }
}
foo(20, 30, 50);
