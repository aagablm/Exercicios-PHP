<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE12</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" >
            <input name="raio" type="text">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>

<?php
$PI = 3.14;
$rRaio = $_POST['raio'];
$rArea = $PI *($rRaio * 2);

echo 'A área do círculo é: '.$rArea;
echo '</br></br>';

echo '<div style="background-color: lightblue;border-radius: 50%;width:'.($rRaio*2).'px;height:'.($rRaio*2).'px"></div>';