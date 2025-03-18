<?php

$message = "AVISO";
$type = "IMPORTANTE";

$closure = function ($name) use ($message, $type) {
   echo "Sr(a) $name temos um $message muito $type";
};

$closure("Ari Junior");
