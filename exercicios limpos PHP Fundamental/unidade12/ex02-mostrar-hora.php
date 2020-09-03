<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    
        <?php

            function formatarDuasCasas($_num){
                return ($_num < 10 ? "0$_num" : "$_num");
            }    

            // geterminar timezone 
            date_default_timezone_set('Brazil/East');
            $_agora = getdate();
            
            //criar elementos
            $_segundo = $_agora["seconds"];
            $_minuto = $_agora["minutes"];
            $_hora = $_agora["hours"];
            $_dia = $_agora["mday"];
            $_mes = $_agora["mon"];
            $_ano = $_agora["year"];

            //mostrar na tela
            echo formatarDuasCasas($_hora).":".formatarDuasCasas($_minuto).":".formatarDuasCasas($_segundo)." - ".formatarDuasCasas($_dia)."/".formatarDuasCasas($_mes)."/".formatarDuasCasas($_ano);
        ?>
    </body>
</html>