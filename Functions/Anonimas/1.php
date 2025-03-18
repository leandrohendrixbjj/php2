<?php

// Functions anônimas não possuem nome, são tipo de callbacks
$name = function($nome){
    return strtoupper($nome);
};

echo $name('pedro') . PHP_EOL;
echo gettype($name); //$name é uma instância de function


