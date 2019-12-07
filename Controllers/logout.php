<?php
$conf = include $_SERVER['DOCUMENT_ROOT'] . '/Agenda/config.php';
session_start();
// unset($_SESSION['nome']);
        
//destroi a sessão toda
session_destroy();

header("location:$conf[url]/Views/user/index.php");