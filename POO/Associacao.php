<?php 

/*
  Associação: Relação entre duas ou mais classes, onde a sua existência
  não dependa uma da outra. Exemplo abaixo, Escritor tem uma associação 
  com a Classe Caneta, não possuem dependencias, apenas uma relação.
*/

class Caneta {  
  public function escrever(): ?String
  {
    return "\tEscreva seu livro";
  }
}

class Escritor {

  private $nome;
  private $caneta; // Associação

  public function __construct(String $nome, Caneta $caneta) {
    $this->nome = $nome;
    $this->caneta = $caneta;
  }
  
  public function getNome(): ?String
  {
    return $this->nome;
  }

  public function getCaneta(): ?Caneta
  {
    return $this->caneta;
  }

}


$caneta = new Caneta();
$escritor = new Escritor('Leandro',$caneta);

echo $escritor->getNome();
echo $escritor->getCaneta()->escrever();