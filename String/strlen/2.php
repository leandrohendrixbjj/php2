<?php

//Observe atentamente e perceba que o primeiro conjunto de caracteres está demarcado sob 
// aspas simples, enquanto que o segundo está envolto por aspas duplas. 
// Aspas simples mantém os caracteres exatamente como estão, portanto o tamanho (strlen()) 
//da string dessa primeira expressão é 4. Já a segunda porção resulta em 3 pois \n é 
//convertido em quebra de linha e conta como um caractere, ao invés de dois.

$str_1 = strlen('1\n2');

$str_2 = strlen("1\n2");

echo "STR_1: {$str_1}" . PHP_EOL;
echo "STR_2: {$str_2}" . PHP_EOL;

echo $str_1 * $str_2;

