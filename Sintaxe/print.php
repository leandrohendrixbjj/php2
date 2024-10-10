<?

/*
  Toda e qualquer execução de print retorna 1
  
  1-) Será apresentado valor 2 por conta dos ()
  2-) Execução da esquerda para direita apresenta 5
  3-) Soma retorno de execução de print, nesse caso 1 e soma com 3
*/

echo '5' . (print 2) + 3; // 254