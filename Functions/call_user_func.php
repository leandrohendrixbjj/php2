<?php

// Call the callback given by the first parameter

function getAdress($data)
{
   return [
    "name" => 'Leandro',
    "Age" => $data[0],
    "Adress" => $data[1]
   ];
}

$data = call_user_func('getAdress', [30,'Quen ST 23']);

print_r($data);