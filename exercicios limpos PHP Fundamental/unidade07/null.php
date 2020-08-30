<?php
    $nome = null;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "Is name null? " . (is_null(($nome)) == 1 ? "Yes" : "No");
        ?>
    </body>
</html>