<?php

//variável de configuração de acesso
$pdo = new PDO("mysql:dbname=crud;host=localhost: 3306", "root", "aluno");

$sql = $pdo->query('SELECT * FROM crud.pessoa;');

$dados = $sql->fetchAll(pdo::FETCH_ASSOC);

echo '<pre>';
print_r($dados);