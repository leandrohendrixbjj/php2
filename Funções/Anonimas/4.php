<?php
// Callable é tipo de dados para uma fn callback
function data(callable $callback)
{
  echo "Executando data" . PHP_EOL;
  $callback();
};

echo data(function () {
  echo "Executando fn callBack";
});
