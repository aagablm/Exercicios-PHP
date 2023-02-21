<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE07</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" >
            <label for="peso">Insira seu peso</label><br><br>
            <input name="peso" type="text"><br><br>
            <label for="altura">Insira sua altura</label><br><br>
            <input name="altura" type="text"><br><br>

            <button type="submit">Enviar</button><br><br>
        </form>
    </body>
</html>

<?php
$rPeso = $_POST['peso'];
$rAltura = $_POST['altura'];
$rIMC = $rPeso / ($rAltura * $rAltura);

if ($rIMC > 25) {
    echo 'Você está acima do peso!';
} else {
    echo 'Você está saudável';
}