<!DOCTYPE html>
<html lang="PT-br">
    <head>
        <title>EXE11</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    </head>
    <body>
        <form method="post">
            
     
    </body>
</html>
<?php

echo '<select name="estrelas">';
for($i = 1; $i <= 10; $i++){
    echo '<option value="'.$i.'"'.'name="'.$i.'">'.$i.'</option>';
}

echo ' </select>';
echo' <button type="submit">Estrelas</button><br></form><br>';

$iEstrelas = $_POST['estrelas'];

for($i = 1; $iEstrelas >= $i; $i++){
    echo '<img width="30px" src="https://th.bing.com/th/id/OIP.X8baUMyjdgBC8YHXekDkiwHaHC?pid=ImgDet&rs=1">';
}