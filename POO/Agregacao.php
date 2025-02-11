<?php

/*
  Agregação: quando temos várias partes que fazem parte de um todo,
  nesse caso temos agregação de vários Produtos dentro de um Carrinho,
  a existência dos produtos não depede da classe Carrinho, esse é o principal
  conceito de agregação
*/

class Produto { 
  
  private string $nome;
  private float $preco;

  function __construct(string $nome, float $preco) 
  {
    $this->nome = $nome;
    $this->preco = $preco;
  }
  
  public function getNome(): ?String
  {
    return $this->nome;
  }

  public function getPreco(): ?float
  {
    return $this->preco;
  }  
}

class Carrinho {
  
  public $produtos;

  public function addProdutos(Produto $produto)
  {
    $this->produtos[] = $produto;
  }
  
  public function getProdutos(): ?array
  {
    return $this->produtos;
  }
}

$p1 = new Produto('Lapis', 10);
$p2 = new Produto('Camiseta', 15.5);

$carrinho = new Carrinho();
$carrinho->addProdutos($p1);
$carrinho->addProdutos($p2);

foreach($carrinho->getProdutos() as $produto){
   echo 'Nome:' . $produto->getNome() . '|' . 'Preço:' . $produto->getPreco() . PHP_EOL;
}
