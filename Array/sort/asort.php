<?php

// Ordem DECRESENTE pela key do array

$fruits = array(
    "d" => "lemon", 
    "a" => "orange", 
    "b" => "banana", 
    "c" => "apple"
);

asort($fruits);

print_r($fruits);
