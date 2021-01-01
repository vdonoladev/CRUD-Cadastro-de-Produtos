<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <title>Menu</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>

  <div class="container" style="width: 400px; margin-top: 40px;">
    <div style="text-align: right;">
      <a href="menu.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
    <h4>Cadastro de Usuário</h4>
    <form action="_insert_usuario.php" method="post">
      <div class="form-group">
        <label>Nome do Usuário</label>
        <input type="text" name="nomeusuario" class="form-control" required autocomplete="off" placeholder="Nome Completo">
      </div>
      <div class="form-group">
        <label style="margin-top: 10px;">E-mail</label>
        <input type="email" name="emailusario" class="form-control" required autocomplete="off" placeholder="Seu E-mail">
      </div>
      <div class="form-group">
        <label style="margin-top: 10px;">Senha do Usuário</label>
        <input id="txtSenha" type="password" name="senhausuario" class="form-control" required autocomplete="off" placeholder="Senha">
      </div>
      <div class="form-group">
        <label style="margin-top: 10px;">Repetir Senha</label>
        <input type="password" name="senhausuario2" class="form-control" required autocomplete="off" placeholder="Repetir Senha" oninput="validaSenha(this)">
        <small>Precisa ser igual a senha digitada acima.</small>
      </div>
      <div class="form-group">
        <label style="margin-top: 10px;">Nível de Acesso</label>
        <select name="nivelusuario" class="form-control">
          <option value="1">Administrador</option>
          <option value="2">Funcionário</option>
          <option value="3">Conferente</option>
        </select>
      </div>
      <div style="text-align: right;">
        <button type="submit" class="btn btn-sm btn-success" style="margin-top: 10px;">Cadastrar</button>
      </div>
    </form>
  </div>

  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function validaSenha(input) {
      if (input.value != document.getElementById('txtSenha').value) {
        input.setCustomValidity('Repita a senha corretamente');
      } else {
        input.setCustomValidity('');
      }
    }
  </script>

</body>

</html>