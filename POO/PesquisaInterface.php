<?php

interface PesquisaInterface
{
  public function criar(): void;
}

class PesquisaRac implements PesquisaInterface
{
  private $status;

  public function __construct()
  {
    $this->status = false;    
  }

  public function criar(): void
  {
    $this->status = true;
  }

  public function getStatus(): ?bool
  {
    return $this->status;
  }
}

$pesquisa = new PesquisaRac();
$pesquisa->criar();

if ($pesquisa->getStatus()) {
  echo "Pesquisa criar com sucesso!";
}
