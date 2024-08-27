<?php

// Converte String para Json

$str = '{"nome":"Leandro","age":"40"}';

$data = json_decode($str);

print_r($data->nome);