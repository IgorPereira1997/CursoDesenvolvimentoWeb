<?php
    //config gerais
    header('Acess-Control-Allow-Origin: *');
    
    //abrir
    $conecta = mysqli_connect("localhost", "root", "", "andes");

    $selecao = "SELECT * FROM produtos";
    $produtos = mysqli_query($conecta, $selecao);

    $retorno = array();
    while($linha = mysqli_fetch_object($produtos)){
       $retorno[] = $linha;
    }

    echo json_encode($retorno);

    //fechar
    mysqli_close($conecta);
?>