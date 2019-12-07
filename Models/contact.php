<?php

/* FUNÇÃO PARA CADASTRAR CONTATO NO BANCO */
function cadastarContato($dados, $conn)
{
    $valores = $dados;
    $sql = 'INSERT INTO contatos (name_contact, phone_contact, mail_contact, id_user) VALUES(?,?,?,?)';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssi", $valores['name_contact'], $valores['phone_contact'], $valores['mail_contact'], $valores['id_user']);
    // $stmt->execute();
    $result = $stmt->execute() ? true : false;
    $stmt->close();

    return $result;
}


/* FUNÇÃO PARA CONSULTAR OS CONTATOS NO BANCO */
function carregarContato($idUser, $conn)
{
    $sql = 'SELECT id_contact, name_contact, phone_contact, mail_contact  FROM contatos WHERE id_user = ? ';
    $stmt = $conn->prepare($sql) ;
    $stmt->bind_param("i", $idUser);
    $stmt->execute();

    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    $stmt->close();

    return $result;
}


/* FUNÇÃO PARA CONSULTAR OS CONTATOS NO BANCO PARA ALTERAÇÃO */
function carregarContatoAlteracao($idUser, $idCont, $conn)
{
    $sql = 'SELECT name_contact, phone_contact, mail_contact  FROM contatos WHERE id_user = ? AND id_contact = ?';
    $stmt = $conn->prepare($sql) ;
    $stmt->bind_param("ii", $idUser, $idCont);
    $stmt->execute();

    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    $stmt->close();

    return $result;
}

/* FUNÇÃO PARA ALTERAR OS CONTATOS NO BANCO */
function alterarContato($dados, $conn)
{
    $sql = 'UPDATE contatos SET name_contact =?, phone_contact =?, mail_contact=? WHERE id_user =? AND id_contact =?';
    $stmt = $conn->prepare($sql) ;
    $stmt->bind_param("sssii", $dados['name_contact'], $dados['phone_contact'], $dados['mail_contact'], $dados['id_user'], $dados['id_contact']);

    $result = $stmt->execute() ? true : false;
    $stmt->close();
    return $result;
}

/* FUNÇÃO PARA EXCLUIR OS CONTATOS NO BANCO */
function excluirContato($idUser, $idCont, $conn)
{
    $sql = 'DELETE FROM contatos WHERE id_user =? AND id_contact =?';
    $stmt = $conn->prepare($sql) ;
    $stmt->bind_param("ii", $idUser, $idCont);

    $result = $stmt->execute() ? true : false;
    $stmt->close();

    return $result;
}