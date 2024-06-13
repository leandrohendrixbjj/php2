<?php 

$datas = [
  ['name' => 'leandro',
    'age' => 30
  ],
  ['name' => 'Soares',
    'age' => 40
  ] 
];

foreach($datas as $key => $data){
  echo "Key:$key Name:$data[name] Age:$data[age]" . PHP_EOL;
}