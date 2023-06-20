<?php
require 'config.php';

$lista = [];
$sql = $pdo ->query("SELECT * FROM crud.pessoa");

if($sql ->rowCount() > 0)
{
    $lista = $sql ->fetchAll();
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
        
        a { 
            color: inherit; 
            text-decoration: none;
        } 
        .Tabela {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
<h1> Listagem de pessoas </h1>

<table border="1" class="Tabela">
    <tr>
        <th> ID </th>
        <th> Nome </th>
        <th> Idade </th>
        <th> Profissão</th>
        <th> Ações </th>
    </tr>
    <?php foreach($lista as $usuario): ?>
        <tr>
            <td> <?=$usuario['id'];?></td>
            <td><?=$usuario['nome'];?></td>
            <td><?=$usuario['idade'];?></td>
            <td><?=$usuario['profissao'];?></td>
            <td>
            <button>
                <a href="editar.php?id=<?=$usuario['id'];?>">Editar</a>
            </button>
            <button>
                <a href="excluir.php?id=<?=$usuario['id'];?>">Excluir</a>
            </button>
            </td>
        </tr>
    <?php endforeach; ?>

</table>


<button>
    <a href="cadastrar.php"> Cadastrar usuários </a>
</button>
</body>
</html>
