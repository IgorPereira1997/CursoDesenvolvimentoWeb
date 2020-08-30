<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo ($salario * $meses) . "</br>";
            echo $salario/30 . "</br>";
            // Exponencial
            echo "Exponenciação: ". pow(6,3) . "</br>";

            // Raiz Quadrada
            echo "Raiz quadrada: " . pow(9, 1/2) . "</br>";

            // Randômico Generica
            echo "Randomico: " . rand() . "</br>";

            // Randômico entre um intervalo
            echo "Randomico no intervalo: " . rand(1, 5) . "</br>";
            
            // Valor absoluto
            echo "|-3| = " . abs(-3) . "</br>";
        ?>
    </body>
</html>