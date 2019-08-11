<form method="post">
  Digite o seu e-mail: <input type="text" name="email"><br><br>
  <input type="submit" name="submit" value="enviar">
</form>

<?php
  if(isset($_POST["email"])){
    echo " Instruções de recuperação de senha envaidas para: ". $_POST["email"];
  }
?>

<h1> Exemplo 2 <h1>
  <?php 
    $nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";

    echo "Nome: ".$nome."<br>";
    echo "E-mail: ".$email."<br>";
?>

<form method="post">
  Nome: <input type="text" name="nome" value="<?= $nome ?>"><br><br>
  Email: <input type="text" name="email" value="<?php $email ?>"><br><br>
  <input type="submit" name="submit" value="Enviar">
</form>