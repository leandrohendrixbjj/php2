<?php

date_default_timezone_set('America/Sao_paulo');

$dt = strtotime("now +24 hours"); // Intervalo de 24 horas

echo date('d/m/Y h:i:s', $dt);
