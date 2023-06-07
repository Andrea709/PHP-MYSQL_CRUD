<?php

//iniciar a sessão
session_start();

//verificar o formulário enviado
/*a variável $_SERVER é uma global que tem as informações
 do servidor e ambiente da execução*/
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    //mensagem enviada pelo usuário, $mensagem é a variável que vai guardar
    $mensagem = $_POST["mensagem"];

    //adicionar a mensagem pra sessão
    $_SESSION["mensagens"] [] = $mensagem;
}

//ver se tem mensagens armazenas já
//isset é uma função pra ver se a variável é nula ou não
if(isset($_SESSION["mensagens"])) 
{
    //mensagem mais antiga pra cima
    //array_reverse é uma função "pronta" pra inverter a ordem padrão
    $mensagens = array_reverse($_SESSION["mensagens"]);
} 
else 
{
    $mensagens = array();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício php</title>
</head>
<body>
    <h1> Exercício Blog <h1>
    <form method="post" action="php-mysql_CRUD/index.php">
        <label for="mensagem">Digite sua mensagem:</label>
        <br>
        <input type="text" name="mensagem">
        <br><br>
        <input type="submit" value="Enviar">

    </form>

    <hr>

    <!-- exibir o histórico das mensagens -->
    <h2>Histórico de mensagens:</h2>
    <?php foreach ($mensagens as $mensagem) : ?>
        <p><?php echo $mensagem; ?></p>
    <?php endforeach; ?>
</body>
</html>