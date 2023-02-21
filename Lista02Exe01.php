<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE01</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" >
            <label for="unidade">Quantas unidades foram consumidas?</label><br>
            <input name="unidade" type="number"><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>
    </body>
</html>
<?php
$iUnidade = $_POST['unidade'];

if ($iUnidade <= 50) {
    $iTotal = $iUnidade * 3.5;
} else if ($iUnidade <= 150) {
    $iTotal = $iUnidade * 4;
} else if ($iUnidade <= 250) {
    $iTotal = $iUnidade * 5.3;
} else {
    $iTotal = $iUnidade * 6.7;           
}

echo 'Foram consumidos R$ ' . $iTotal;
