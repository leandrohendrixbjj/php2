<?php

// Converte Json para Array

$json = '{"nome":"leandro","age":40}';

var_dump(json_decode($json, true));

