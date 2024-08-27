<?php

// Converte Object to Json

$object = new stdClass;
$object->name = 'Leandro';
$object->age = 'Soares';

$data = json_encode($object);

print_r($data);
