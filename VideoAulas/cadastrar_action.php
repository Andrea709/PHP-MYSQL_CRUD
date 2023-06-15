<?php

require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
$profissao = filter_input(INPUT_POST, 'prof');

if($nome && $idade && $profissao)
{
    $sql = $pdo->prepare("INSERT INTO pessoa (nome, idade, profissao) VALUES (?, ?, ?)");
    $sql->bindValue(1, $nome);
    $sql->bindValue(2, $idade);
    $sql->bindValue(3, $profissao);

    $sql->execute();

    header("Location: http://localhost/php-mysql_CRUD/VideoAulas/");
    exit;
}
else 
{
    header("Location: http://localhost/php-mysql_CRUD/VideoAulas/cadastrar.php");
    exit;
}



