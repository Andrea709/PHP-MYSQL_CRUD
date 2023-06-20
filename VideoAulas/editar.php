<?php

require 'config.php';

$usuario = [];
$id = filter_input(INPUT_GET, 'id');

if($id)
{
    $sql = $pdo->prepare("SELECT * FROM crud.pessoa WHERE id = :id");
    $sql ->bindValue(':id', $id);
    $sql ->execute();

    if($sql ->rowCount() > 0)
    {
        $usuario = $sql->fetch(PDO::FETCH_ASSOC); //dentro do fetch: retorna uma matriz para a edição
    } else {
        header("Location: http://localhost/php-mysql_CRUD/VideoAulas/listagem.php ");
        exit;
    }
} else {
    header("Location: http://localhost/php-mysql_CRUD/VideoAulas/listagem.php ");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">
        * {
            text-align: center;
        }
        
    </style>
</head>
<body>
    <h1> Editar Pessoa </h1>
    <form method="POST" action="editar_action.php">
        <input type="hidden" name="id" value="<?=$usuario['id'];?>"/>
        <label>
            Nome: <input type="text" name="nome" value="<?=$usuario['nome'];?>"/>
        </label>
        <label>
            Idade: <input type="text" name="idade" value="<?=$usuario['idade'];?>" />
        </label>
        <label>
            Profissão: <input type="text" name="profissao" value="<?=$usuario['profissao'];?>"/>
        </label>

        <input type="submit" value="Atualizar"/>
    </form>    
</body>
</html>