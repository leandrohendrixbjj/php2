<?php

/*
  Composição: Conhecida como a relação TEM UM.
  Quando temos um objeto "maior" que é composto por pequenos objetos, 
  quando o objeto maior for "destruído" os pequenos tbm são.
  
  A relação e de uma casa que é formada por vários cômodos, quando 
  vc destroi a casa os cômodos tbm serão destruídos.  
*/

class Cliente { 
  
  private string $nome;
  private array $enderecos = [];

  function __construct(string $nome) 
  {
    $this->nome = $nome;    
  }

  public function getNome(): ?String
  {
    return $this->nome;
  }
  
  // A composição acontece aqui
  public function setEnderecos(string $cidade, string $estado): ?Endereco
  {
    return $this->enderecos[] = new Endereco($cidade,$estado);
  }

  public function showEnderecos(): void
  {
    foreach($this->enderecos as $key => $endereco){
      echo "Endereço: $key: {$endereco->getCidades()}\n";
    }
  }
  
}

class Endereco {
  
  private $cidade;
  private $estado;

  function __construct(string $cidade, string $estado)
  {
       $this->cidade = $cidade;
       $this->estado = $estado;
  }

  function getCidades(): ?string
  {
    return "{$this->cidade}/{$this->estado}";
  }
  
}

$cliente = new Cliente('leandro');
$cliente->setEnderecos('Sao Paulo','SP');
$cliente->setEnderecos('Rio de Janeiro','RJ');

$cliente->showEnderecos();