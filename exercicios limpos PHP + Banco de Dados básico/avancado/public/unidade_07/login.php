<?php require_once("../../connection/conexao.php"); ?>
<?php
    //adicionar variáveis de sessão
    session_start();

    if (isset($_POST["user"]) && isset($_POST["key_password"])) {
        $usuario = $_POST["user"];
        $key = $_POST["key_password"];
        $login = "SELECT * FROM clientes WHERE usuario = '{$usuario}' AND senha = '{$key}' ";
        $acesso = mysqli_query($connect, $login);
        if (!$acesso) {
            die("Falha na consulta ao banco de dados (login details)");
        }
        $info = mysqli_fetch_assoc($acesso);

        if (empty($info)) {
            $mensagem = "Usuário ou senha incorretos!";
        } else {
            $_SESSION["user_portal"] = $info["clienteID"];
            header("location:listagem.php");
        }
    } 
?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP Integração com MySQL</title>

    <!-- estilo -->
    <link href="_css/estilo.css" rel="stylesheet">
    <link href="_css/login.css" rel="stylesheet">

</head>

<body>
    <?php include_once("../_incluir/topo.php"); ?>
    <?php include_once("../_incluir/funcoes.php"); ?>

    <main>
        <div id="janela_login">
            <form action="login.php" method="post">
                <h2>Tela de Login</h2>
                <input type="text" name="user" placeholder="Nome de Usuário">
                <input type="password" name="key_password" placeholder="Senha">
                <input type="submit" value="Login">

                <?php
                    if(isset($mensagem)){
                ?>
                <p><?php echo $mensagem; ?></p>    
                <?php
                    }
                ?>
            </form>
        </div>
    </main>

    <?php include_once("../_incluir/rodape.php"); ?>
</body>

</html>

<?php
// Fechar conexao
mysqli_close($connect);
?>