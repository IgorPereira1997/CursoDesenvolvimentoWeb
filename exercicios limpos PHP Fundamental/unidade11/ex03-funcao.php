<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php 
        $tempini = 30;
        $escini = "F";
        $escend = "K";
        
        function farenheit_to_celsius($temp){
            return (($temp - 32)*5)/9;
        }

        function celsius_to_farenheit($temp){
            return (1.8*$temp) + 32;
        }

        function converterTemp($grausInicial, $escalaInicial, $escalaDestino){
            switch ($escalaInicial) {
                case 'C':
                    switch ($escalaDestino) {
                        case 'C':
                            return $grausInicial;
                            break;
                        case 'F':
                            return celsius_to_farenheit($grausInicial);
                            break;
                        case 'K':
                            return $grausInicial + 273.15;
                            break;
                    }
                    break;
                case 'F':
                    switch ($escalaDestino) {
                        case 'C':
                            return farenheit_to_celsius($grausInicial);
                            break;
                        case 'F':
                            return $grausInicial;
                            break;
                        case 'K':
                            return farenheit_to_celsius($grausInicial) + 273.15;
                            break;
                    }
                    break;
                case 'K':
                    switch ($escalaDestino) {
                        case 'C':
                            return $grausInicial - 273;
                            break;
                        case 'F':
                            return celsius_to_farenheit($grausInicial - 273);
                            break;
                        case 'K':
                            return $grausInicial;
                            break;
                    }
                    break;
            }
        }

        echo "$tempini °$escini equivale a ". number_format(converterTemp($tempini, $escini, $escend), 2)." °$escend";
    ?>
</body>
</html>