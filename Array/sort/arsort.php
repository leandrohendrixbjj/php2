<?php

// Ordem CRESCENTE pela key do array

$fruits = array(
    "d" => "lemon", 
    "a" => "orange", 
    "b" => "banana", 
    "c" => "apple"
);

arsort($fruits);

print_r($fruits);
