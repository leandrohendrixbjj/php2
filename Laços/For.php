<?php

$data = [1, 2, 3];
$sum = 0;

for ($row = 0; $row < sizeof($data); $row++) {
    $sum += $data[$row];
}

echo "Soma: $sum";
