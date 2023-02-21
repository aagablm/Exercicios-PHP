<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE13</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" >
            <input name="numeros" type="text">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
<?php

$iNumeros = $_POST['numeros'];

$aNumeros = explode(',',$iNumeros);

foreach ($aNumeros as $iIndice => $iNumeros){
    echo $aNumeros[$iIndice];
} 

