<?php

// Soma 1 em cada elemento do array

$sum = function($values){
    return $values + 1;
};

$data = array_map($sum, [1,2,3]);

print_r($data);



