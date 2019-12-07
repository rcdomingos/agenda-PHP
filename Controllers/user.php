<?php
$conf = include $_SERVER['DOCUMENT_ROOT'] . '/Agenda/config.php';
$conn = require $conf['path'] . '/Models/conexao.php';


include $conf['path'] . '/Models/user.php';


/** Verificar se o usuario existe no banco para poder acessar o sistema */
if (isset($_POST['acessar'])) {
    $usuario = validarUsuario($_POST['login_user'], $_POST['pass_user'], $conn);
    //var_dump($usuario);
    if ($usuario) {
        session_start();
        $_SESSION['name_user'] = $usuario['name_user'];
        $_SESSION['login_user'] = $usuario['login_user'];
        $_SESSION['id_user'] = $usuario['id_user'];
        header("location:$conf[url]/Views/contact/index.php");
    } else {
        header("location:$conf[url]/Views/user/index.php");
    }
}


/** Cadastrar o usuario no banco */
if (isset($_POST['cadastrar'])) {
    $data = [];
    foreach ($_POST as $key => $value) {
        if ($key != "cadastrar") {
            if ($key == "pass_user") {
                $data[$key] = password_hash($value, PASSWORD_DEFAULT);
            } else {
                $data[$key] = utf8_decode($value);
            }
        }
    }

    // print_r($data);
    // cadastrarUsuario($data, $conn);

    if (cadastrarUsuario($data, $conn)) {
        header("location:$conf[url]/Views/user/retorno.php");
    } else {
        echo "Erro para Cadastrar o Usuario ";
    }
}


$conn->close();