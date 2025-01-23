<?php 

/*
  Valida uma combinação de valores dentro do array
  Aplicada na história de Desmobilização
*/

$data = [90,50,100,45,90,90,90,1,90,45];
$seq1 = null;
$seq2 = null;

for($row=0; $row < sizeof($data); $row++){
  $next = $row + 1;

  if ( isset($data[$row]) && isset($data[$next]) ){
    $seq1 = $data[$row];
    $seq2 = $data[$next];
  }   
  
  echo "Seq1: $seq1 | Seq2: $seq2 \n";
  
  $sequence =  "$seq1,$seq2";
  $find = validateSeque($sequence);

  if (!$find){    
    continue;
  }else{
    echo "Achou a Sequência certa :)";    
    echo "Seq1: $seq1 | Seq2: $seq2 \n";
    break;
  } 
  
}

function validateSeque($seq): bool
{
    $rightSeq = "90,45";
    if ($rightSeq == $seq){
      return true;
    }
    return false;   
    
}