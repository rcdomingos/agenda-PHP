<?php
session_start();
$conf = include $_SERVER['DOCUMENT_ROOT'] . '/Agenda/config.php';
$conn = include $conf['path'] . '/Models/conexao.php';

include $conf['path'] . '/Models/contact.php';

$contatos = carregarContato($_SESSION['id_user'], $conn);


/**Validações para cadastrar novos contatos */
if (isset($_POST['cadastrar'])) {
    $dados=[];
    foreach ($_POST as $key => $value) {
        if ($key != "cadastrar") {
            $dados[$key] = utf8_decode($value);
        }
    }
  
    //  print_r($dados);
    if (cadastarContato($dados, $conn)) {
        header("location:$conf[url]/Views/contact/index.php");
    } else {
        echo 'Erro para cadastrar contato no Banco';
    }
    exit;
}


/**Validaçõe para alterar contatos cadastrados */
if (isset($_GET['contact'])) {
    $alteraContato = current(carregarContatoAlteracao($_SESSION['id_user'], $codContact, $conn));
}

if (isset($_POST['alterar'])) {
    $dados=[];
    foreach ($_POST as $key => $value) {
        if ($key != "alterar") {
            $dados[$key] = utf8_decode($value);
        }
    }
    if (alterarContato($dados, $conn)) {
        header("location:$conf[url]/Views/contact/index.php");
    } else {
        echo 'Erro para Alterar contato no Banco';
    }
    exit;
}


/**Validações para Excluir o contato selecionado */
if (isset($_GET['excluir'])) {
    if (excluirContato($_SESSION['id_user'], $_GET['excluir'], $conn)) {
        header("location:$conf[url]/Views/contact/index.php");
    } else {
        echo 'Erro para Excluir contato no Banco';
    }
    exit;
}

$conn->close();