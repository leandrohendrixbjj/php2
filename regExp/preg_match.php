<?php 

/* 
  Se achar retorna 1 se não 0
  i -> Ignora casesensitive 
*/

$str = 'Node Js is faster than PHP';

$find = preg_match('/node/i',$str);

if ($find){
  echo "Achou a palavra: node";
}