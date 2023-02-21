<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE16</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" >
            <p>Nome:</p>
            <input name="nome" type="text">
            <p>Ano nascimento:</p>
            <input name="nascimento" type="text">
            <p>Salário por hora:</p>
            <input name="salario" type="text">
            <p>Aluguel:</p>
            <input name="aluguel" type="text">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>
<?php
$iHorasMensais = 200;

$iSalario = $_POST['salario'] * 200;

$iAluguel = $_POST['aluguel'];

$iIdade = 2023 - $_POST['nascimento'];

$sNome = $_POST['nome'];

$iSobra = $iSalario - $iAluguel;

echo 'Olá '.$sNome.' você tem '.$iIdade.' anos, você ganha R$'.$iSalario.' por mês. Sabendo que seu aluguel é '.$iAluguel.' , lhe resta R$ '.$iSobra;