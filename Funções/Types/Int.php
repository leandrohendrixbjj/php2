<?php

function getPerson(int $age): int
{
  return $age;
}

echo gettype( 
  getPerson(40)
);
