<!DOCTYPE html>

<head>
  <meta charset="UTF-8">
  <title>Listagem de Produtos</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://kit.fontawesome.com/8f97e2c4db.js" crossorigin="anonymous"></script>
</head>

<body>

  <div class="container" style="margin-top: 40px;">
    <div style="text-align: right;">
      <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
    <h3>Lista de Produtos</h3>
    <br>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Nº Produto</th>
          <th scope="col">Nome Produto</th>
          <th scope="col">Categoria</th>
          <th scope="col">Quantidade</th>
          <th scope="col">Fornecedor</th>
          <th scope="col">Ação</th>
        </tr>
      </thead>

      <?php

      include "conexao.php";
      $sql = "SELECT * FROM `estoque`";
      $busca = mysqli_query($conexao, $sql);

      while ($array = mysqli_fetch_array($busca)) {

        $id_estoque = $array['id_estoque'];
        $nproduto = $array['nproduto'];
        $nomeproduto = $array['nomeproduto'];
        $categoria = $array['categoria'];
        $quantidade = $array['quantidade'];
        $fornecedor = $array['fornecedor'];
      ?>
        <tr>
          <td><?php echo $nproduto ?></td>
          <td><?php echo $nomeproduto ?></td>
          <td><?php echo $categoria ?></td>
          <td><?php echo $quantidade ?></td>
          <td><?php echo $fornecedor ?></td>
          <td><a class="btn btn-warning btn-sm" style="color: #fff;" href="editar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-edit"></i>&nbsp;Editar</a>
            <a class="btn btn-danger btn-sm" style="color: #fff;" href="deletar_produto.php?id=<?php echo $id_estoque ?>" role="button"><i class="far fa-trash-alt"></i>&nbsp;Excluir</a>
          </td>
        </tr>

      <?php } ?>

    </table>
  </div>

  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>