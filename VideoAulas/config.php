<?php

$db_name = 'CRUD';
$db_host = 'localhost';
$db_user = 'root';
$bd_password = 'aluno';


$pdo = new PDO("mysql:dbname=" .$db_name. ";host=".$db_host, $db_user, $bd_password );

