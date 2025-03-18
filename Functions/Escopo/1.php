<?php

/*
   Escopo: Uma variável declarada dentro da função, são visíveis apenas dentro da
   da mesma. Se uma outra variável com mesmo nome for declarada fora tem outro endereço
   memória.
 */

function exibir()
{
  $nome = 'Soares';
}

$nome = 'Leandro => Fora da FN' . PHP_EOL;
exibir();
echo $nome;