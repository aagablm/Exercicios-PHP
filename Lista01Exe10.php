<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE10</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post">
            <input type="radio" name="menor" value="menor">
            <label for="menor">Menor de 18</label><br>
            <input type="radio" id="maior" name="maior" value="maior">
            <label for="maior">Maior de 18</label><br>
            <input type="radio" id="idoso" name="idoso" value="idoso">
            <label for="idoso">Idoso</label><br><br>

            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

<?php
$oMenor = $_POST['menor'];
$oMaior = $_POST['maior'];
$oIdoso = $_POST['idoso'];

if ($oMenor == 'menor') {
    echo 'Você é menor de 18';
} else if($oMaior == 'maior') {
       echo 'Você é maior de 18';
}else{
       echo 'Você é idoso';
}
    