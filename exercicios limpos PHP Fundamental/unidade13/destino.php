<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
        <?php
            $_salada = array("imagens/laranja.jpg", "imagens/maca.jpg", "imagens/abacate.jpg");
            $_cod = $_GET['cod'];
        ?>

        <img src="<?php echo $_salada[$_cod]?>">
    </body>
</html>