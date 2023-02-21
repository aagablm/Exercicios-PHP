<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE06</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" action="Lista01Exe06.php">
            <input name="valor1" type="text"><br><br>
            <input name="valor2" type="text"><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>
    </body>
</html>
<?php

$iValor1 = $_POST['valor1'];
$iValor2 = $_POST['valor2'];

if (($iValor1 >= 0) && ($iValor2 >= 0)){
    $rArea = $iValor1 * $iValor2;
    $rPerimetro = 2 * ($iValor1 + $iValor2);
    
    echo 'A área é: '. $rArea;
    echo '</br>';
    echo 'O perimetro é: '. $rPerimetro;  
    echo '</br></br><div style="background-color: red;'. 'width:'.$iValor1. 'px;height:'.$iValor2.'px "></div>';
}else{
    echo 'Escreva números válidos';
}