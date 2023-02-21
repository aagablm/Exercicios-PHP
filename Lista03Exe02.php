<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE03</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <?php
        include('exercicio03.php');
        
        $aFrutas = ['Banana', 'Maçã', 'Abacaxi', 'Tomate', 'Morango', 'Pastel', 'Limão',
            'Abacate', 'Melão'];
             
        echo montaRadio($aFrutas, 'frutas', false);
        echo '</br>';
        echo montaSelect($aFrutas, 'frutas', true);
        
        ?>  
    </body>
</html>
