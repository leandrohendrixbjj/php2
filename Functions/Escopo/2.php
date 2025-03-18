<?php


/*
   Escopo: Uma variável declarada dentro da função, são visíveis apenas dentro da
   da mesma. Agora se forem declaradas como global, vão possuir o mesmo endereço de
   memória.
 */

function exibir()
{
  global $nome;
  $nome = 'Soares' . PHP_EOL;
}

$nome = 'Leandro => Fora da FN';
echo "Antes do Exibir: $nome\n";
exibir();
echo $nome;