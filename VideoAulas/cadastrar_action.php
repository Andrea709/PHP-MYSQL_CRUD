<?php

require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
$profissao = filter_input(INPUT_POST, 'profissao');

print($nome);

$sql = $pdo->prepare("INSERT INTO pessoa (nome, idade, profissao) VALUES (:nome, :idade, :profissao");

$sql->bindValue(':nome', $nome);
$sql->bindValue(':idade', $idade);
$sql->bindValue(':profissao', $profissao);

$sql->execute();

header(Location: "http://localhost/php-mysql_CRUD/php-mysql_CRUD/VideoAulas/");

