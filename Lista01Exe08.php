<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE08</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" >
            <label for="usuario">Insira seu usuário: </label><br><br>
            <input name="usuario" type="text"><br><br>
            <label for="senha">Insira sua senha: </label><br><br>
            <input name="senha" type="password"><br><br>

            <button type="submit">Enviar</button><br><br>
        </form>
    </body>
</html>

<?php
$sUsuario = $_POST['usuario'];
$sSenha = $_POST['senha'];

if (($sUsuario == 'matheus') && ($sSenha == 'pastel')) {
    echo 'Autenticação realizada com sucesso';
} else {
    echo 'Você não tem permissão de visualizar essa página';
}