<?php

$message = "AVISO";
$type = "IMPORTANTE";

$closure = function ($personName) use ($message, $type) {
   echo "Sr(a) $personName temos um $message muito $type";
};

$closure("Ari Junior");
