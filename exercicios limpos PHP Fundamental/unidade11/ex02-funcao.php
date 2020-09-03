<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        function retornarDiaria($_salario) {
            return number_format( $_salario/30, 2);
        }

        echo retornarDiaria(1900);
    ?>
</body>
</html>