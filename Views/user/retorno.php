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
    <div class="row justify-content-md-center mt-5">
      <div class="col-md-9 text-center">
        <h1>Usuario Cadastrado com Sucesso!</h1>
        <p>click no <a href="./index.php ">link</a> para acessar o sistema</p>
      </div>
    </div>
  </div>
</body>

</html>