<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CURSO PHP FUNDAMENTAL</title>
    </head>
    <body>
        <?php
        $megasena = array();

            for($i = 1; $i < 7; $i++){
                $sorteio = rand(1,60);
                if(in_array($sorteio, $megasena) == 1)
                    $i--;
                else
                    $megasena[] = $sorteio; 
            }
            sort($megasena);
        ?>

        <pre>
        <?php
            print_r($megasena);
        ?>
        </pre>
    </body>
</html>