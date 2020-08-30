<?php
    $_salada = array("Laranja","Uva","Abacate");
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            $pesq = "Laranja";
            echo "Existe o elemento? ". (in_array("Laranja", $_salada) == 1 ? "Sí señor! Na posición ".array_search($pesq, $_salada) : "No, compadre!") . "<br>";
        ?>
    </body>
</html>