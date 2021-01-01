<?php

include 'conexao.php';

$id = $_GET['id'];

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Formulário de Edição</title>
  <link rel="stylesheet" href="css/bootstrap.css">

  <style>
    #tamanhoContainer {
      width: 500px;
    }

    #botao {
      background-color: #FF1168;
      color: #ffffff;
    }
  </style>

</head>

<body>
  <div class="container" id="tamanhoContainer" style="margin-top: 40px;">
    <h4>Formulário de Edição</h4>
    <form action="_atualizar_categoria.php" method="post" style="margin-top: 20px;">
      <?php

      $sql = "SELECT * FROM `categoria` WHERE id_categoria = $id";
      $buscar = mysqli_query($conexao, $sql);
      while ($array = mysqli_fetch_array($buscar)) {

        $id_categoria = $array['id_categoria'];
        $nomecategoria = $array['nome_categoria'];

      ?>

        <div class="form-group">
          <label>Nome Categoria</label>
          <input type="text" class="form-control" name="nomecategoria" value="<?php echo $nomecategoria ?>">
          <input type="text" class="form-control" name="id" value="<?php echo $id_categoria ?>" style="display: none;">
        </div>

        <div style="text-align: right; margin-top: 15px;">
          <button type="submit" id="botao" class="btn btn-sm">Atualizar</button>
        </div>
      <?php } ?>
    </form>
  </div>

  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>