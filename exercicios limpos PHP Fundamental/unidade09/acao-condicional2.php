<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php 
            $_dia = "Qua";
            switch ($_dia) {
                case 'Dom':
                case 'Sáb':
                    echo "Fim de semana";
                    break;
                case 'Seg':
                case 'Ter':
                case 'Qua': 
                case "Qui":
                case "Sex":
                    echo "Dia de semana";
                    break;
                default:
                    echo "Dia inválido";
                    break;
            }
        ?>
    </body>
</html>