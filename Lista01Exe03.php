<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE03</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" action="Lista01Exe03.php">
            <input name="nome" type="text"><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>
    </body>
</html>

<?php
$sNome = $_POST['nome'];
$iTamanho = strlen($sNome);

echo "Imprime: ";
for ($i = 1; $iTamanho >= $i; $i++) {
    echo "$i ";
}

echo '</br>';
echo "Nome: " . $sNome;
echo '</br>';
echo "Total de caracteres: " . $iTamanho;
echo '</br>';
?>