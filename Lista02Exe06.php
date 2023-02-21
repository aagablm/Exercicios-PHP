<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE03</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" >
            <label for="texto">Insira sua mensagem</label><br>
            <textarea rows="1" cols="1" name="texto">
            </textarea><br>
            <button type="submit">Enviar</button><br><br>
        </form>
    </body>
</html>

<?php
$sTexto = $_POST['texto'];

$aTexto = explode(' ', $sTexto);

echo 'Há ' . count($aTexto,0) . ' palavras';
