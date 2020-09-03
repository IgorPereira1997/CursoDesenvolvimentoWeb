<?php require_once("../../connection/conexao.php"); ?>
<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP Integração com MySQL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("../_incluir/topo.php"); ?>
        <?php include_once("../_incluir/funcoes.php"); ?>
        
        <main>  
            <!--Exclue variável sessão selecionada-->
            <?php unset($_SESSION["user"]); ?>
            <!-- Destroi todas as variáveis de sessão -->
            <?php session_destroy(); ?>
        </main>

        <?php include_once("../_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($connect);
?>