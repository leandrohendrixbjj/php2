<?php 

// Permite que requisições HTTPS sejam realizadas
// Graças ao conceito de stream wrappers no PHP.
$data = file_get_contents('https://viacep.com.br/ws/01001000/json/');

var_dump($data);