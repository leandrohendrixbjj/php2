<?php 

$data = [1,2,3];
$count = 0;
$sum = 0;

while($count < sizeof($data)){
   $sum += $data[$count];
   $count++;
}

echo "Sum is $sum";