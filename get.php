<html>
  <head>
</head>
<body>
<form method="get">
  Busca: <input type="text" name="texto"><br><br>
  <input type="submit" name="submit" value="Enviar">
</form>

<?php
  if(isset($_GET["texto"])){
    echo "Você buscou por:".$_GET["texto"];
  }
?>
<h1> Exemplo 2 <h1>
  <?php 
    $nome = isset($_GET["nome"]) ? $_GET["nome"] : "";
    $email = isset($_GET["email"]) ? $_GET["email"] : "";

    echo "Nome: ".$nome."<br>";
    echo "E-mail: ".$email."<br>";
?>

<form method="get">
  Nome: <input type="text" name="nome" value="<?= $nome ?>"><br><br>
  Email: <input type="text" name="email" value="<?php $email ?>"><br><br>
  <input type="submit" name="submit" value="Enviar">
</form>

</body>
<html>