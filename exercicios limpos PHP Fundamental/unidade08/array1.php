<?php
$_salada = array('Maçã', 'Abacaxi', 'Laranja');
$_salada[] = "Banana";
$_salada[] = "Kiwi";
?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>

<body>
    <pre>
        <?php
        echo $_salada[0] . "<br>";
        echo $_salada[1] . "<br>";
        echo $_salada[2] . "<br>";
        $_salada[] = "Avocado";
        $_salada[] = "Strawberry";

        echo $_salada[5] . "<br>";

        echo count($_salada) . "<br>";
        print_r($_salada);
        ?>
        </pre>
</body>

</html>