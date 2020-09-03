<?php
    //preparar o arquivo para callback
    $callback = isset($_URL['callback'])? $_URL['callback']: false;

    // abrir conexao
    $conecta = mysqli_connect("localhost","root","","andes");

    $selecao = "SELECT nomeproduto, precounitario, imagempequena FROM produtos";
    $produtos = mysqli_query($conecta,$selecao);

    $retorno = array();
    while($linha = mysqli_fetch_object($produtos)) {
        $retorno[] = $linha;
    }   

    echo ($callback ? $callback.'(' : '').json_encode($retorno). ($callback? ')': '');
    
    // fechar conecta
    mysqli_close($conecta);
?>