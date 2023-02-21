<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE03</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post" >
            <button type="submit">Gerar Senha</button><br><br>
        </form>
    </body>
</html>

<?php
$iTamanho = 10;

$iNumeroSenha = rand(1,10);

$aAlfabeto = ['a','b','c','e','f','g','h','i','j'];

$sAlfabeto = implode(',',$aAlfabeto);
 
var_dump($sAlfabeto);

$aLetraSenhaMistura = str_shuffle($sAlfabeto);


$aLetraSenha = substr($aLetraSenhaMistura, 0, 5) ;

$sSenha = $iNumeroSenha.$aLetraSenha.$iNumeroSenha  ;

