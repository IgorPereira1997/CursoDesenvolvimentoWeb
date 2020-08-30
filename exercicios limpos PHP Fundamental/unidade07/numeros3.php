<?php
    $gasolina = 4.55;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
        
            //arredondar para media
            echo round($gasolina) . "</br>";

            //arredondar para cima
            echo ceil(4.01) . "</br>";

            //arredondar para baixo
            echo floor(4.99) . "</br>";

        ?>
    </body>
</html>