<?php

include "conexao.php";

$categoria = $_POST['categoria'];

$sql = "INSERT INTO categoria (categoria) values ('$categoria')";
$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">

<div class="container" style="width: 400px;">
  <center>
    <h3>Adicionado com Sucesso!</h3>
    <div style="margin-top: 10px;">
      <a href="adicionar_categoria.php" class="btn btn-sm btn-warning" style="color: #fff;">Voltar</a>
    </div>
  </center>
</div>