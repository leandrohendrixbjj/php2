<?php 

/* 
  Callbacks podem ser representadas pela declaração de tipo callable.
  Algumas funções como call_user_func() ou usort() aceitam funções de callback definidas 
  pelo usuário como parâmetro.
*/

function minha_funcao_callback() {
   echo 'olá mundo!';
}

// Tipo 1: Calback simples
call_user_func('minha_funcao_callback');