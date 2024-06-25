<?php

// num elevado à potência de exponent. Se ambos os valores forem inteiros não negativos 
// e o resultado puder ser representado como um inteiro, o resultado será retornado com o 
// tipo int, caso contrário será retornado como um float.

$num = 2;
$expoent = 3;

echo pow($num, $expoent); //8

var_dump(pow(2, 8)); // int(256)
echo pow(-1, 20); // 1
echo pow(0, 0); // 1
echo pow(10, -1); // 0.1

echo pow(-1, 5.5); // NAN
