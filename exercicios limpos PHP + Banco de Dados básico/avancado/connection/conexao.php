<?php
    //passo 1
    $servidor = "localhost";
    $user = "root";
    $senha = "";
    $banco = "andes";
    $connect = mysqli_connect($servidor, $user, $senha, $banco);

    //passo 2
    if (mysqli_connect_errno()) {
        die("Conexão falhou: " . mysqli_connect_errno());
    }
?>