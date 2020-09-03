<?php
    require_once("../../connection/conexao.php");

    //passo 3
    $consulta_produtos = "SELECT nomeproduto, precounitario, tempoentrega FROM produtos WHERE tempoentrega = 5";

    $produtos = mysqli_query($connect, $consulta_produtos);

    if (!$produtos) {
        die("Consulta ao banco de dados falhou");
    }

?>

<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP Integração com MySQL</title>
</head>

<body>
    <ol>
        <?php
        while ($registro = mysqli_fetch_assoc($produtos)) {
        ?>
            <li><?php echo $registro["nomeproduto"] ?></li>
        <?php
        }
        ?>
    </ol>
        <?php mysqli_free_result($produtos); ?>
</body>

</html>
<?php
    //passo final
    mysqli_close($connect);
?>