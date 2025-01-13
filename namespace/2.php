<?php

// Sem o namespace não poderiamos usar uma função com nome sizeof

namespace contador;

function sizeof()
{
  return 100;
}

echo sizeof();
