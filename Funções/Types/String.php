<?php

function getPerson(string $data): string
{
  return $data;
}

echo gettype( 
  getPerson('Leandro')
);