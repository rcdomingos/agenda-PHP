<?php
$conf = include $_SERVER['DOCUMENT_ROOT'] . '/Agenda/config.php';
include $conf['path'] . '/Controllers/userValidation.php';
$codContact = $_GET['contact'];

include $conf['path'].'/Controllers/contact.php';

$linha = [];
if (isset($_GET['contact'])) {
    $linha = $alteraContato;
    // print_r($alteraContato);
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo $conf['url'] ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo $conf['url'] ?>/css/mystyle.css">
  <title>Alterar Contato</title>
</head>

<body>
  <!-- menu do sistema -->
  <?php include $conf['path'].'/includes/menu.php';?>
  <div class="container mt-5">
    <div class="row justify-content-md-center text-center">
      <h1>Alteração do Contato Codigo: <?php echo $linha['id_contato']?>
    </div>
    <div class="row justify-content-md-center mt-5">
      <div class="col-md-6">
        <form class="" action='<?php echo $conf['url'] ?>/Controllers/contact.php' method="post">
          <div class="form-group mb-3">
            <label class="sr-only" for="name_contact">Nome:</label>
            <input class="form-control" type="text" name="name_contact" value="<?php echo $linha['name_contact']?>">
          </div>
          <div class="form-group mb-3">
            <label class="sr-only" for="phone_contact">Telefone:</label>
            <input class="form-control" type="text" name="phone_contact" value="<?php echo $linha['phone_contact']?>">
          </div>
          <div class="form-group  mb-3">
            <label class="sr-only" for="mail_contact">Email:</label>
            <input class="form-control" type="text" name="mail_contact" value="<?php echo $linha['mail_contact']?>">
          </div>
          <input type="hidden" name="id_contact" value="<?php echo $codContact;?>">
          <input type="hidden" name="id_user" value="<?php echo $_SESSION['id_user']?>">
          <div class="input-group d-flex justify-content-center">
            <input class="btn btn-success mx-2 col-2" type="submit" name="alterar" value="Alterar" id="alterar">
            <a class="btn btn-danger mx-2 col-2" href="./index.php">Cancelar</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- footer do sistema -->
  <?php include $conf['path'].'/includes/footer.php';?>

</body>

</html>