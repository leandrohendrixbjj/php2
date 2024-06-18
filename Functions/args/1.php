<?php
 
 // Devolve o número de argumentos passados para a função
function foo()
{
  echo "Number os arguments: ", func_num_args(), PHP_EOL;
}
foo(20, 30, 40);
