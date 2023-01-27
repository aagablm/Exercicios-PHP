//1- Solicite a entrada de um número e descubra se um número digitado é par ou ímpar.
<!DOCTYPE html>
<html>
<body>
<form method="post">
<input type="number" name="numero">
<button type="submite">Clique Aqui</button>
</form>
<?php
$iNumero = $_POST['numero'];

if ($iNumero % 2 == 0){
     $sResultado = 'par';
}else{
     $sResultado = 'impar';
     }
 echo 'O número '.$iNumero.' é '.$sResultado;
?>

</body>
</html>
