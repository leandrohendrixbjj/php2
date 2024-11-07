<?php

/*
   É possível atribuir expressões em constantes, sejam elas procedurais ou de classes.
*/

define("IDADE_MIN", 5);
const IDATE_MAX = IDADE_MIN * 4;

echo sprintf("Idade: %d \n", IDATE_MAX);

const QUILOMETRAGEM = 7;
define("DISTANCIA_US", QUILOMETRAGEM * 1.61);

echo sprintf("KM:%d", QUILOMETRAGEM);