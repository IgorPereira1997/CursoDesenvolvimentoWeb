<?php require_once("../../connection/conexao.php"); ?>
<?php
if (isset($_GET["cod"])) {
    $produtoID = $_GET["cod"];
} else {
    Header("Location: listagem.php");
}
// consulta ao banco
$consulta = "SELECT * FROM produtos WHERE produtoID={$produtoID}";
$detalhe = mysqli_query($connect, $consulta);

if (!$detalhe) {
    die("Erro na conexão com o banco de dados!");
} else {
    $dados_delathe = mysqli_fetch_assoc($detalhe);
}
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso PHP Integração com MySQL</title>

    <!-- estilo -->
    <link href="_css/estilo.css" rel="stylesheet">
    <link href="_css/produto_detalhe.css" rel="stylesheet">
</head>

<body>
    <?php include_once("../_incluir/topo.php"); ?>
    <?php include_once("../_incluir/funcoes.php"); ?>

    <main>
        <div id="detalhe_produto">
            <ul>
                <li class="imagem"><img src="<?php echo $dados_delathe['imagemgrande']; ?>"></li>
                <li>
                    <h2><?php echo $dados_delathe['nomeproduto']; ?></h2>
                </li>
                <li><?php echo $dados_delathe['descricao']; ?></li>
                <li>Código de barra: <b><?php echo $dados_delathe['codigobarra']; ?></b></li>
                <li>Tempo de entrega: <?php echo $dados_delathe['tempoentrega']; ?> dias</li>
                <li>Preço de revenda: <?php echo real_format($dados_delathe['precorevenda']); ?></li>
                <li>Preço unitário: <?php echo real_format($dados_delathe['precounitario']); ?></li>
                <li>Quantidade em Estoque: <?php echo $dados_delathe['estoque']; ?> unidades</li>
            </ul>
        </div>
    </main>

    <?php include_once("../_incluir/rodape.php"); ?>
</body>

</html>

<?php
// Fechar conexao
mysqli_close($connect);
?>