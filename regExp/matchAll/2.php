<?php 

/*
  \d Número de 0-9
  \D Tudo exceto número de 0-9
  
  \s Qualquer espaço, tabulação e nova linha
  \S Tudo exceto espaço, tabulação e nova linha
  
  \w Qualquer alfanumérico e _ (underscore)
  \W Tudo exceto alfanumérico e _ (underscore
*/

$str = 'PHP 7.1';
$regExp = '/\D/';

preg_match_all($regExp,$str,$data);

print_r($data);