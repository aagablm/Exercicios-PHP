<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE04</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post">
            <h1>Sorteio</h1>
            <label for="numero">Escolha seu número entre 1 e 10</label><br>
            <input name="numero" type="number"><br><br>
            <button type="submit">Enviar</button><br><br>
        </form>
    </body>
</html>

<?php
$iNumero = $_POST['numero'];
$iNumeroSorteado = rand(1, 10);
$iFim = 10;
$iInicio = 1;
$sPremio = 'BOI GORDO';

if (($iNumero > $iFim) || ($iNumero < $iInicio)) {
    echo "<p>Escreva um número válido</p>";
    echo "<style>p{
         color: red;
         }</style>";
} else if ($iNumero == $iNumeroSorteado) {
    echo '<p>Ganhou! Foi sorteado ' . $iNumero . ' você ganhou um ' . $sPremio.'</p>';
    echo "<style>p{
         color: green;
         }</style>";
} else {
    echo '<p>Você perdeu! Foi sorteado o número ' . $iNumeroSorteado . ' ,e você escolheu o número ' . $iNumero.'</p>';
    echo "<style>p{
         color: red;
         }</style>";
}
?>