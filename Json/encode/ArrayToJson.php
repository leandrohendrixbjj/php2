<?php

/*
   Converte Array to Json

   JSON_PRETTY_PRINT => Exibe uma visualização mais agradavel
   JSON_UNESCAPED_UNICODE => Permite que acentos sejam impressos
   JSON_UNESCAPED_SLASHES => Permite que as barras '/' sejam impressas
   JSON_FORCE_OBJECT => Permite que todo objeto tenha sua chave
   
*/

$arr = [
  "nome" => 'Leandro',  
  "idade" => 'Soares',
  'categoria' => 'Programação/Desenvolvimento',
  "Linguagem" => ['PHP', 'Node'],
  "Estados" => [
    'sp' => 'sao paulo',
    'es' => 'espirito santo'
  ]
];

$data = json_encode($arr,
  JSON_PRETTY_PRINT | 
  JSON_UNESCAPED_UNICODE |
  JSON_UNESCAPED_SLASHES | 
  JSON_FORCE_OBJECT);

print_r($data);
