<?php
$conf = include $_SERVER['DOCUMENT_ROOT'] . '/Agenda/config.php';
include $conf['path'] . '/Controllers/userValidation.php';
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo $conf['url'] ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo $conf['url'] ?>/css/mystyle.css">
  <title>Cadastro de Contato</title>
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-md-center text-center">
      <h1>Novo Contato</h1>
    </div>
    <div class="row justify-content-md-center mt-5">
      <div class="col-md-6">
        <form class="" action='<?php echo $conf['url'] ?>/Controllers/contact.php' method="post">
          <div class="form-group mb-3">
            <label class="sr-only" for="name_contact">Nome:</label>
            <input class="form-control" type="text" name="name_contact" placeholder="Nome Completo">
          </div>
          <div class="form-group mb-3">
            <label class="sr-only" for="phone_contact">Telefone:</label>
            <input class="form-control" type="text" name="phone_contact" placeholder="Telefone">
          </div>
          <div class="form-group  mb-3">
            <label class="sr-only" for="mail_contact">Email:</label>
            <input class="form-control" type="text" name="mail_contact" placeholder="E-mail">
          </div>
          <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']?>">
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