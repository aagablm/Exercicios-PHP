<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE04</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" >
            <label for="string">Insira uma palavra</label><br><br>
            <input name="string" type="text"><br><br>
            <label for="caracter">Insira uma letra</label><br><br>
            <input name="caracter" type="text"><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>
    </body>
</html>


<?php
$sString = $_POST['string'];
$sCaracter = $_POST['caracter'];
$iTamanho = strlen($sString);
$icount = 0;

for ($i = 0; $iTamanho >= $i; $i++) {
    if ($sString[$i] == $sCaracter) {
        $icount++;
    }
}
echo 'Há '.$icount.' letras '. strtoupper($sCaracter);
