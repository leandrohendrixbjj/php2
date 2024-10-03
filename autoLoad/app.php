<?php 

/*
  A função __autoload é invocada toda vez que algum objeto é criado, onde os
  nomes de classes requisitadas são convertidos em nomes de arquivos 
  (que serão incorporados via include/require), seguindo uma convenção 
  que o usuário estabelece
*/
spl_autoload_register(
    function ($class){
      require("$class.php");
    }
  );

  new Customer();
  new Person();