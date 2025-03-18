<?php 

/* 
  Callbacks podem ser representadas pela declaração de tipo callable.
  Algumas funções como call_user_func() ou usort() aceitam funções de callback definidas 
  pelo usuário como parâmetro.
*/

class Person {
   static function myAge() {
       echo '50';
   }
}

// Tipo 2: Chamada a métodos estáticos
call_user_func(array('Person', 'myAge'));