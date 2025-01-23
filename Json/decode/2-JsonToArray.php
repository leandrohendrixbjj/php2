<?php

/* 
   Converte Json para Array
   true: Converte para array, sem esse parâmetro
   temos um objeto
*/ 

$json = '{"nome":"leandro","age":40}';

var_dump(json_decode($json, true));

