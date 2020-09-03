<?php require_once("../../connection/conexao.php"); ?>
<?php require_once("../_incluir/funcoes.php"); ?>
<?php

if (isset($_POST["enviar"])) {
    $msg = publishArchive($_FILES['upload_file']);
}

?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP Integração com MySQL</title>

    <!-- estilo -->
    <link href="_css/estilo.css" rel="stylesheet">
    <style>
        input {
            display: block;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <?php include_once("../_incluir/topo.php"); ?>

    <main>
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="1000000">
            <input type="file" name="upload_file">
            <input type="submit" name="enviar" value="Publicar">
        </form>
        <?php
        if (isset($msg)) {
            echo $msg;
        }
        ?>
    </main>

    <?php include_once("../_incluir/rodape.php"); ?>
</body>

</html>

<?php
// Fechar conexao
mysqli_close($connect);
?>