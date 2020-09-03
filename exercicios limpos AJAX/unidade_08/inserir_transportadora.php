  <?php
    $conecta = mysqli_connect("localhost","root","","andes");
    if ( mysqli_connect_errno()  ) {
        die("Conexao falhou: " . mysqli_connect_errno());
    }

    if(isset($_POST["nometransportadora"])) {
        $nome       = $_POST["nometransportadora"];
        $endereco   = $_POST["endereco"];
        $cidade     = $_POST["cidade"];
        $estado     = $_POST["estados"];
        
        $inserir    = "INSERT INTO transportadoras ";
        $inserir    .= "(nometransportadora,endereco,cidade,estadoID) ";
        $inserir    .= "VALUES ";
        $inserir    .= "('$nome','$endereco','$cidade', $estado)"; 
        
        $retorno = array();
        $op_insert = mysqli_query($conecta, $inserir);
        if($op_insert){
            $retorno["sucesso"] = true;
            $retorno["msg"] = "Transportdora inserida com sucesso!";
        }else{
            $retorno["sucesso"] = false;
            $retorno["msg"] = "Falha na inserção da transportadora!";
        }

        echo json_encode($retorno);

    }
?>