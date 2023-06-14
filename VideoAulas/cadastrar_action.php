<?php

require 'config.php';

$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');
$profissao = filter_input(INPUT_POST, 'profissao');

$sql = $pdo->prepare("INSERT INTO pessoa (nome, idade, profissao) VALUES (:nome, :idade, :profissao");

$sql->bindValue(':nome', $nome);
$sql->bindValue(':idade', $idade);
$sql->bindValue(':profissao', $profissao);

$sql->execute();

header("Location: index.php");

