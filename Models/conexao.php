<?php

$conf = include $_SERVER['DOCUMENT_ROOT'] . '/Agenda/config.php';

$conn = new mysqli($conf['host'], $conf['user'], $conf['pass'], $conf['data']);

if ($conn->connect_error) {
    die('Conexão Falhou: '.$conn->connect_error);
}

return $conn;