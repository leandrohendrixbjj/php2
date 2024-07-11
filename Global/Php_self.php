<!-- 
  $_SERVER["PHP_SELF"] é o caminho para o próprio arquivo em questão. 
  Ao submeter o formulário, a requisição POST será enviada para ele mesmo. 
  Não é uma boa prática. Parece tudo certo, mas isso abre algumas brechas 
  na sua aplicação. Alguém provido de más intenções poderia muito bem acessar a URL 
-->
   <?php 
  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
?>

<html>
<body>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>