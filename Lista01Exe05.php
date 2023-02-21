<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE5</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" action="Lista01Exe05.php">
            
            <label for="nome">Nome:</label>
            <input name="nome" type="text"><br><br>

            <label for="nota1">Nota 1:</label>
            <input name="nota1" type="number"><br><br>
            <label for="nota2">Nota 2:</label>
            <input name="nota2" type="number"><br><br>
            <label for="nota3">Nota 3:</label>
            <input name="nota3" type="number"><br><br>
            <label for="nota1">Nota 4:</label>
            <input name="nota4" type="number"><br><br>

            <button type="submit">Enviar</button><br><br>
        </form>
    </body>
</html>
<?php
    $sNome = $_POST['nome'];
    $rNota1 = $_POST['nota1'];
    $rNota2 = $_POST['nota2'];
    $rNota3 = $_POST['nota3'];
    $rNota4 = $_POST['nota4'];
    
    $rMedia = ($rNota1 + $rNota2 + $rNota3 + $rNota4)/4;
    
    if ( $rMedia >= 7){
        echo 'Parabéns '.$sNome. ', você foi aprovado, sua média é: '. $rMedia;
    }else{
        echo 'Você foi reprovado '.$sNome. ', sua média é: '. $rMedia;
    }
    