<?php

/*
  preg_last_error: returns an error code for the most recently evaluated 
  regular expression.   
*/
$str = 'The regular expression is invalid.';
$pattern = '/invalid//';
$data = @preg_match('/invalid//', $str, $matches);

if (!$data){
  $err = preg_last_error();
  if($err === PREG_INTERNAL_ERROR) {
    echo 'Invalid regular expression.';
  }
}


