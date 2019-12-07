<?php
$conf = include $_SERVER['DOCUMENT_ROOT'] . '/Agenda/config.php';
include $conf['path'] . '/Controllers/userValidation.php';
include $conf['path'] . '/Controllers/contact.php';
$idLinha = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo $conf['url'] ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo $conf['url'] ?>/css/mystyle.css">
  <title>Agenda Eletronica</title>
</head>

<body>
  <?php include $conf['path'].'/includes/menu.php';?>
  <div class="container">
    <div class="row">
      <h1>Agenda de contatos</h1>
    </div>
    <div class="row">
      <a class="btn btn-primary my-2" href="<?php echo $conf['url'] ?>/Views/contact/create.php"
        role="button">Cadastrar</a>
      <table class="table table-borderless table-striped">
        <thead>
          <tr>
            <th scope="col-1">#</th>
            <th scope="col-4">Nome</th>
            <th scope="col-2">Telefone</th>
            <th scope="col-3">E-mail</th>
            <th scope="col-2">Opções</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($contatos as $linha) { ?>
          <tr>
            <th scope="row"><?php echo $idLinha?>
            </th>
            <td><?php echo $linha['name_contact']?>
            </td>
            <td><?php echo $linha['phone_contact']?>
            </td>
            <td><?php echo $linha['mail_contact']?>
            </td>
            <td><a class="btn btn-warning"
                href="<?php echo $conf['url'] ?>/Views/contact/alter.php?contact=<?php echo $linha['id_contact'];?>"
                role="button">Alterar</a>
              <a class="btn btn-danger btn-excluir"
                href="<?php echo $conf['url'] ?>/Controllers/contact.php?excluir=<?php echo $linha['id_contact'];?>"
                role="button">Excluir</a>
            </td>
          </tr>
          <?php
            $idLinha++;
        }?>
        </tbody>
      </table>
    </div>
  </div>

  <?php include $conf['path'].'/includes/footer.php';?>

  <script src="<?php echo $conf['url'] ?>/js/meuScript.js">
  </script>
</body>


</html>