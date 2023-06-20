<?php
require 'config.php';

$id = filter_input(INPUT_GET, 'id');

if($id)
{
    $sql = $pdo->prepare("DELETE FROM crud.pessoa WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
}

header("Location: http://localhost/php-mysql_CRUD/VideoAulas/listagem.php ");

?>