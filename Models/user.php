<?php

/**FUNÇÃO PARA VALIDAR O USUARIO NO BANCO */
function validarUsuario($user, $pass, $conn)
{
    $sql = 'SELECT id_user, login_user,name_user, pass_user  from usuarios where login_user = ? ';
    $stmt = $conn->prepare($sql) ;
    $stmt->bind_param("s", $user);
    $stmt->execute();

    $result = $stmt->get_result()->fetch_assoc();

    $stmt->close();

     return password_verify($pass, $result['pass_user']) ?  $result : false;
//    return $result;
    // return current($resultAcesso);
}


/**FUNÇÃO PARA CADASTRAR O USUARIO NO BANCO */
function cadastrarUsuario($dados, $conn)
{
  $valores = $dados;

  $sqlValida = 'SELECT login_user from usuarios where login_user = ? ';
  $stmt = $conn->prepare($sqlValida) ;
  $stmt->bind_param("s", $valores['login_user']);
  $stmt->execute();

  $resultValida = $stmt->get_result()->num_rows;

  $stmt->close();
   
  if(!$resultValida){
    $sql = 'INSERT INTO usuarios (name_user, login_user, pass_user) values(?,?,?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $valores['name_user'], $valores['login_user'], $valores['pass_user']);
    // $stmt->execute();
    $result = $stmt->execute() ? true : false;
    $stmt->close();

    return $result;
   }else{
    echo "Usuario ja existe!";
  }
}