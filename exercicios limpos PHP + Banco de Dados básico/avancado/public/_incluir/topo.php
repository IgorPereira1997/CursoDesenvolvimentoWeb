<header>
    <div id="header_central">
        <?php
            if (isset($_SESSION["user_portal"])){
                $user = $_SESSION["user_portal"];
                $saudation = "SELECT nomecompleto FROM clientes WHERE clienteID = {$user} ";

                $saudation_login = mysqli_query($connect, $saudation);
                if(!$saudation_login){
                    die("Falha no banco de dados! (Saudação)");
                }

                $saudation_login = mysqli_fetch_assoc($saudation_login);
                $nome = $saudation_login["nomecompleto"];
        ?>
        <div id="header_saudacao">
            <h5>Bem vindo, <?php echo $nome; ?> - <a href="sair.php">Sair</a></h5>           
        </div>
        <?php
            }
        ?>
        <img src="../_assets/logo_andes.gif">
        <img src="../_assets/text_bnwcoffee.gif">
    </div>
</header>