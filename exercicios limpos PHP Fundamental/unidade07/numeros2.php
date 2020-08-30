<?php
    $salario = 1095;
    $gasolina = 4.55;
    $telefone = "1224-5644";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "$telefone " . (is_numeric($telefone) == 1 ? "é um número " : "não é um número") . "</br>";
            echo "$gasolina " . (is_numeric($gasolina) == 1 ? "é um número " : "não é um número") . "</br>";
            echo "$salario " . (is_numeric($salario) == 1 ? "é um número " : "não é um número") . "</br>";
            echo "</br>";
            // testar se é inteiro
            echo "$telefone " . (is_integer($telefone) == 1 ? "é um número inteiro " : "não é um número inteiro") . "</br>";
            echo "$gasolina " . (is_integer($gasolina) == 1 ? "é um número inteiro " : "não é um número inteiro") . "</br>";
            echo "$salario " . (is_integer($salario) == 1 ? "é um número inteiro " : "não é um número inteiro") . "</br>";
            echo "</br>";
            // testar se é float
            echo "$telefone " . (is_float($telefone) == 1 ? "é um número flutuante" : "não é um número flutuante") . "</br>";
            echo "$gasolina " . (is_float($gasolina) == 1 ? "é um número flutuante" : "não é um número flutuante") . "</br>";
            echo "$salario " . (is_float($salario) == 1 ? "é um número flutuante" : "não é um número flutuante") . "</br>";
            echo "</br>";
        ?>
        
        
    </body>
</html>