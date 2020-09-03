<?php

    $alfabeto = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $tamanho = 12;
    $letra = "";
    $resultado = "";

    for($i = 1; $i < $tamanho; $i++){
        $letra = substr($alfabeto, rand(0, 35), 1);
        $resultado .= $letra;
    }

    date_default_timezone_set('America/Recife');
    $agr = getdate();

    $cod_data = $agr["year"]."_".$agr["yday"];
    $cod_data .= $agr['hours'].$agr['minutes'].$agr["seconds"];

    echo "foto_".$cod_data."_".$resultado;

?>