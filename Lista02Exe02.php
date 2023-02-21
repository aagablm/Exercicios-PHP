<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE02</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" >
            <label for="numero">Digite um número</label><br>
            <input name="numero" type="number"><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>
    </body>
</html>

<?php

$iNumero = $_POST['numero'];
$aMeses = ['','Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro'.'Outubro','Novembro','Dezembro'];

echo $aMeses[$iNumero];
        