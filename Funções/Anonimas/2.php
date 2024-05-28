<?php

$sum = function($values){
    return $values + 1;
};

$data = array_map($sum, [1,2,3]);

print_r($data);



