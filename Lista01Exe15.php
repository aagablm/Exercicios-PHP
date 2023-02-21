<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE15</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" >
            <input name="letras" type="text">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
<?php

$sLetras = $_POST['letras'];
$iTamanho = strlen($sLetras);

$aLetras = explode('',$sLetras);

foreach($aLetras as $iIndice => $sLetras){
    echo $aLetras[$iIndice];
}

