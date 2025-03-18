<?php 

$url = 'http://www.totvs.com.br';

if(filter_var($url, FILTER_VALIDATE_URL)):
  echo "URL correta" . PHP_EOL;
else:
  echo "URL incorreta" . PHP_EOL;
endif;  