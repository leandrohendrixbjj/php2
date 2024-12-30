<?php

/*
  Se atributo $name não retornar um valor, um Fatal error será apresentado.
  Para evitar esse erro, basta a inclusão de uma '?' na frente do tipo da função.
*/

class Person {
  public $name;

  public function getName(): ?string
  {
    return $this->name;
  }
}

$person = new Person();
echo $person->getName();