<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE01</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" action="Lista01Exe01.php">
            <input name="valor1" type="number">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

<?php
$iQuantidade = $_POST['valor1'];
for ($i = 0; $iQuantidade >= $i; $i++) {
    echo $i . ' ';
}
?>
