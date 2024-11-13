<?php

/*
   Visibilidade em constantes:  a constante AGE é protected e não permite que seja 
   acessada externamente a classe, gerando um Fatal error
*/

Class Person {
   public const NAME = 'Leandro';
   protected const AGE = 40;
}

try{
   $person = new Person();
   echo $person::NAME;
   echo $person::AGE;
}catch(\Throwable $error){
   print_r($error->getMessage());
}

