<?php

/**Validar se o usuario esta logado para permitir acesso as paginas */
$conf = include $_SERVER['DOCUMENT_ROOT'] . '/Agenda/config.php';
session_start();
if (! isset($_SESSION['id_user'])) {
    header("location:$conf[url]/Views/user");
    session_destroy();
    exit;
}