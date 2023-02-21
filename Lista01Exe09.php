<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE08</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" >
            <label for="esportes">Selecione os esportes </label><br><br>
            <input name="natacao" type="checkbox" value="natacao">Natação<br>
            <input name="futebol" type="checkbox">Futebol<br>
            <input name="volei" type="checkbox">Vôlei<br>
            <input name="tenis" type="checkbox">Tênis<br>
            <input name="basquete" type="checkbox">Basquete<br><br>

            <button type="submit">Enviar</button><br><br>
        </form>
    </body>
</html>

<?php
$sNatacao = $_POST['natacao'];
$sFutebol = $_POST['futebol'];

$aEsportes = array($sNatacao, $sFutebol);
