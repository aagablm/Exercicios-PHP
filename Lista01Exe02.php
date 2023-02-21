<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE02</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" action="Lista01Exe02.php">
            <label for="inicio">Escreva o número inicial</label><br>
            <input name="inicio" type="number"><br>
            <label for="fim">Escreva o número final</label><br>
             <input name="fim" type="number"><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>
    </body>
</html>

<?php
    $iFim =  $_POST['fim'];
    $iInicio =  $_POST['inicio'];
    
    if ($iFim < $iInicio){
        echo "Escreva número válidos";
    }else{
        for ($i = $iInicio+1; $iFim > $i; $i++){
            echo $i.' ';    
        }
    }
?>