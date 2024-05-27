<?php 

$dt = new DateTime();

$dt->sub(new DateInterval('P1M')); //Subtrai UM MES
$dt->modify('-1 day');

print_r($dt);