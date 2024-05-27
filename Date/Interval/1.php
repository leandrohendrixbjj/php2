<?php 

$dt = new DateTime();

$dt->sub(new DateInterval('P1M')); //Subtrai UM MES

print_r($dt);