<?php 
  
/*
   O strict_types: por padrão tem seu valor iqual a 0, quando alteramos seu 
   valor para 1, significa que estamos DEIXANDO DE utilizar o recurso de
   type juggling, que permite que o PHP faça as conversões de forma implícita. Nesse
   caso o PHP deixa de ser 'Fraco' (weak mode) e para para 'Rigoroso' (strict mode)

   1-) declare(strict_types=1)
   2-) deve ser a primeira declaração do arquivo
   3-) a declaração será aplicada para todo o arquivo
   4-) não afeta scripts via include ou que incorporam esse arquivo   
*/  


declare(strict_types=1);

function obtemInteiro($value): int { return $value; }
function obtemFloat($value): float { return $value; }
function obtemString($value): string { return $value; }
function obtemBooleano($value): bool { return $value; }

$data = 7.5;
echo (obtemInteiro($data)) . PHP_EOL;
echo (obtemFloat($data)) . PHP_EOL;
echo (obtemString($data)) . PHP_EOL;
echo (obtemBooleano($data));
