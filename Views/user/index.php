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
  <title>Tela de Logim</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-md-center mt-5 ">
      <div class="col-md-4 mt-md-5">
        <form class="mt-5 px-md-3" action='<?php echo $conf['url'] ?>/Controllers/user.php' method="post">
          <!-- <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
          <h1 class="h3 mb-3 font-weight-normal text-center">Faça login</h1>
          <label for="login_user" class="sr-only">Usuario</label>
          <input type="text" id="login_user" class="form-control mb-2" name="login_user" placeholder="Usuario"
            autofocus>
          <label for="pass_user" class="sr-only">Senha</label>
          <input type="password" id="pass_user" class="form-control mb-2" name="pass_user" placeholder="Senha">
          <button class="btn btn-lg btn-primary btn-block mt-3" type="submit" name="acessar">Login</button>
        </form>
        <div class="mb-3 mt-3 px-md-3">
          <p> Não tem cadastro?
            <a href="<?php echo $conf['url'] ?>/Views/user/create.php">Cadastre-se
              aqui</a>
          </p>
          <p class="mt-5 mb-3 text-muted text-center">&copy; RCDomingos 2019</p>
        </div>
      </div>
    </div>
  </div>

</body>

</html>