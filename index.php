<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
  <title>Tela de Login</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <style>
    #tamanho {
      width: 350px;
      -webkit-box-shadow: 10px 10px 28px -8px rgba(194, 194, 194, 1);
      -moz-box-shadow: 10px 10px 28px -8px rgba(194, 194, 194, 1);
      box-shadow: 10px 10px 28px -8px rgba(194, 194, 194, 1);
    }
  </style>
</head>

<body>

  <div class="container" id="tamanho" style="margin-top: 100px; border-radius: 15px; border: 2px solid #f3f3f3;">
    <div style="padding: 10px">
      <center>
        <img src="imagem/cadeado.png" alt="Cadeado" width="125px" height="125px">
      </center>
      <form>
        <div class="form-group">
          <label>Usuário</label>
          <input type="text" name="usuario" class="form-control" placeholder="Usuário" autocomplete="off" required>
        </div>
        <div class="form-group">
          <label style="margin-top: 10px;">Senha</label>
          <input type="password" name="usuario" class="form-control" placeholder="Senha" autocomplete="off" required>
        </div>
      </form>
      <div style="text-align: right;">
        <button type="submit" class="btn btn-sm btn-success" style="margin-top: 15px;">Entrar</button>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>