<?php
    if(isset($_POST["form"])){
        $_nome = isset($_POST["nome"]) ? $_POST["nome"] : "No name";
        $_email = isset($_POST["email"]) ? $_POST["email"] : "None informed";
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php if (!isset($_POST['form'])){ ?>
        <form action="formulario2.php" method="post">
            <label for="nome">Nome Completo</label>
            <input type="text" name="nome" id="nome">
            
            <label for="email">Email</label>
            <input type="text" name="email" id="email">
            
            <input type="submit" name="form" value="Enviar Cadastro">
        </form>
        <?php 
            }else{
                echo "Nome: " . $_nome . "<br>Email: " . $_email;
            } 
        ?>
    </body>
</html>