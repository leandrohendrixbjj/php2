<?php

/*
  O operador ?? retornará o primeiro operando se este existir (e não for null), 
  se não retornará o segundo operando.
*/

$valor = null;

$preco = $valor ?? 0;

echo $preco;
