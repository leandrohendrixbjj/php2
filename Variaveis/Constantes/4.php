<?php

/*
  Constantes: possui escopo global, mesmo temos acesso fora da fn
*/

function person() {
  define('name','movida');
}

person();

echo name;