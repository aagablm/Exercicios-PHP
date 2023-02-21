<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE03</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" >
            <label for="nome">Insira os nomes separados por vírgula</label><br>
            <input name="nome" type="text"><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>
    </body>
</html>

<?php

$sNomes = $_POST['nome'];

$aNomes = explode(',',$sNomes);


foreach($aNomes as $iIndice => $sNome){
    echo $aNomes[$iIndice];
}