<?php 

/* 
  Forma empilhada de aplicar a operador ternário. São avaliados da 
  esquerda para direita.
  
  Obs: Osite oficial php.net desaconselha o uso de operadores ternários 
  empilhados, seu comportamento não é óbvio.
*/

echo (true ? 'verdadeiro' : false) ? 'v' : 'f';