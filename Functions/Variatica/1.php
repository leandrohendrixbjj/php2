<?php 

/*
  Função variádica: permitem que se passe qualquer número de parâmetros 
  para uma função  
 */

function info (...$params)
{
  print_r($params);
}


info('leandro',1,[10,20]);


