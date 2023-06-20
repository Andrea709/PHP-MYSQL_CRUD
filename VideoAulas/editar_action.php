<?php

require 'config.php';

$id = filter_input(INPUT_POST, 'id');
$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
$profissao = filter_input(INPUT_POST, 'profissao');

if($id && $nome && $idade && $profissao)
{
    $sql = $pdo->prepare("UPDATE crud.pessoa SET nome = :nome, idade = :idade, profissao = :profissao WHERE id = :id;");
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':idade', $idade);
    $sql->bindValue(':profissao', $profissao);
    $sql->bindValue(':id', $id);
    $sql->execute();

    header("Location: http://localhost/php-mysql_CRUD/VideoAulas/listagem.php ");
}else{
    header("Location: http://localhost/php-mysql_CRUD/VideoAulas/listagem.php ");
    exit;
}

