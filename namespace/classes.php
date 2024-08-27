<?php 

// Permite declarar classes com o mesmo nome

namespace store;
class Customer {
  function info () {
    return "Customer from Store";
  }
}

namespace site;
class Customer {
  function info (){
    return "Customer from Site";
  }
}

use store\Customer as storeCustomer;
use site\Customer as siteCustomer;

$customerStore = new storeCustomer();
echo $customerStore->info() . PHP_EOL;

$customerSite = new siteCustomer();
echo $customerSite->info();

