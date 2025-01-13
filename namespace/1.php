<?php 

// Permite declarar classes com o mesmo nome

namespace site;
class Customer {
  private $name;

  function __construct(String $name) 
  {
    $this->name = $name;
  }

  public function getName(): ?String 
  {
    return $this->name;
  }
}

namespace lojafisica;
class Customer {
  private $name;

  function __construct(String $name)
  {
    $this->name = $name;
  }

  public function getName(): ?String 
  {
    return $this->name;
  }
}

use site\Customer as CustomerSite;
use lojafisica\Customer as CustomerLojafisica;

$site = new CustomerSite('leandro');
$loja = new CustomerLojafisica('soares');

echo $site->getName() . PHP_EOL;
echo $loja->getName() . PHP_EOL;