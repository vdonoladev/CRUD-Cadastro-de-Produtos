<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <style>
    #botao {
      background-color: #FF1168;
      color: #ffffff;
    }
  </style>
</head>

<body>

  <div class="container" style="margin-top: 40px; width: 500px;">
    <div style="text-align: right;">
      <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
    <h4>Cadastro de Fornecedor</h4>
    <form action="_inserir_fornecedor.php" method="post">
      <label style="margin-bottom: 8px;">Fornecedor</label>
      <div class="form-group">
        <input type="text" name="fornecedor" class="form-control" placeholder="Digite o nome do fornecedor" autocomplete="off">
      </div>
      <div style="text-align: right;">
        <button type="submit" id="botao" class="btn btn-sm" style="margin-top: 15px;">Cadastrar</button>
      </div>
    </form>
  </div>

  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>