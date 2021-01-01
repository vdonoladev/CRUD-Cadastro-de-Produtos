<?php

include "conexao.php";

$nproduto = $_POST["nproduto"];
$nomeproduto = $_POST["nomeproduto"];
$categoria = $_POST["categoria"];
$quantidade = $_POST["quantidade"];
$fornecedor = $_POST["fornecedor"];

$sql = "INSERT INTO `estoque`(`nproduto`, `nomeproduto`, `categoria`, `quantidade`, `fornecedor`) VALUES ($nproduto,'$nomeproduto','$categoria',$quantidade,'$fornecedor')";

$inserir = mysqli_query($conexao, $sql);

?>

<link rel="stylesheet" href="css/bootstrap.css">
<div class="container" style="width: 500px; margin-top: 20px;">
  <center>
    <h4>Produto Adiconado com Sucesso!</h4>
  </center>
  <div style="padding-top: 20px;">
    <center>
      <a href="index.php" role="button" class="btn btn-sm btn-primary">Cadastrar novo Item</a>
    </center>
  </div>
</div>