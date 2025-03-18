<?php


class Veiculos
{
  protected $nome;
  protected $marca;

  public function __construct(string $nome, string $marca)
  {
    $this->nome = $nome;
    $this->marca = $marca;
  }
}

class Carro extends Veiculos
{
  public function acelerar(): void
  {
    echo "O Carro: $this->nome está acelerado\n";
  }
}

class Bicicleta extends Veiculos
{
  public function pedalando(): void
  {
    echo "A Bicicleta: $this->nome está pedalando\n";
  }
}

$carro = new Carro('Gol', 'Volkswagen');
$carro->acelerar();

$bicicleta = new Bicicleta('Bicicleta', 'Monark');
$bicicleta->pedalando();