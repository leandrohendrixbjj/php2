<!--  
  Permite trabalhar com html dentro do código PHP 
  Para executar esse código inicie um servidor PHP
  php -S 127.0.0.1:8000
-->
<?php
$str = "This is some <b>bold</b> text.";
echo htmlspecialchars($str);
?>

<!DOCTYPE html>
<html>
<body>
   <p><?= $str ?></p>      
</body>
</html>