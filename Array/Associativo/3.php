<?php

$contas = [
  [
    "nome" => "Leandro",
    "saldo" => 10
  ],
  2 => [
    "nome" => "Soares",
    "saldo" => 20
  ]
];

$contas[] = ["nome" => "Ribeiro", "saldo" => 30];

foreach ($contas as $key => $conta) {
  echo "Id:$key, Nome:$conta[nome], Saldo:$conta[saldo]" . PHP_EOL;
}
