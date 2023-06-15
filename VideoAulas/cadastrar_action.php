<?php

require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
$profissao = filter_input(INPUT_POST, 'prof');

$sql = $pdo->prepare("INSERT INTO pessoa (nome, idade, profissao) VALUES (?, ?, ?)");
$sql->bindValue(1, $nome);
$sql->bindValue(2, $idade);
$sql->bindValue(3, $profissao);

$sql->execute();

header("Location: http://localhost/php-mysql_CRUD/php-mysql_CRUD/VideoAulas/");

