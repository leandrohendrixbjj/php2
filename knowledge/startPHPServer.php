<!--  
  Execute no terminar: php -S 127.0.0.1:8000
  Acesso: http://localhost:8000/
-->
<?php
$str = "Welcome to <b>PHP Server</b> text.";
echo htmlspecialchars($str);
?>

<!DOCTYPE html>
<html>
<body>
   <p><?= $str ?></p>      
</body>
</html>