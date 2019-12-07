<?php
$conf = require '../../config.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo $conf['url'] ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo $conf['url'] ?>/css/mystyle.css">
  <title>Cadastro de Usuario</title>
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-md-center text-center">
      <h1>Novo Usuário</h1>
    </div>
    <div class="row justify-content-md-center mt-5">
      <div class="col-md-6">
        <form class="" action='<?php echo $conf['url'] ?>/Controllers/user.php' method="post">
          <div class="form-group mb-3">
            <label class="sr-only" for="name_user">Nome:</label>
            <input class="form-control" type="text" name="name_user" placeholder="Nome Completo">
          </div>
          <div class="form-group mb-3">
            <label class="sr-only" for="login_user">Usuário:</label>
            <input class="form-control" type="text" name="login_user" placeholder="Usuário">
          </div>
          <div class="form-row">
            <div class="form-group col-6 mb-3">
              <label class="sr-only" for="pass_user">Senha:</label>
              <input class="form-control" type="password" name="pass_user" placeholder="Senha">
            </div>
            <div class="form-group col-6 mb-3">
              <label class="sr-only" for="password">Confirmar senha:</label>
              <input class="form-control" type="password" placeholder="Confirmar Senha">
            </div>
          </div>
          <div class="input-group d-flex justify-content-center">
            <input class="btn btn-success mx-2 col-3" type="submit" value="Criar Usuário" name="cadastrar" id="criar">
            <input class="btn btn-warning mx-2 col-3" type="reset" value="Limpar" id="limpar">
            <a class="btn btn-danger mx-2 col-3" href="./index.php">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>