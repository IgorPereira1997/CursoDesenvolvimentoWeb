<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_idade = 18;
            $_sexo = "F";
            if($_idade < 17 || $_idade == 17){
                echo ($_sexo == "F"? "Menor de idade e mulher": "Menor de idade e homem");
            }else{
            echo ($_sexo == "F" ? "Maior de idade e mulher" : "Maior de idade e homem");
            }
        ?>
    </body>
</html>