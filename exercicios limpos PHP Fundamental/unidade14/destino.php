<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>

<body>
    <?php
        $_nome = isset($_POST["nome"]) ? $_POST["nome"]: "No name";

        $_email = isset($_POST["email"]) ? $_POST["email"]: "None informed";

        echo "Nome: " . $_nome . "<br>Email: " . $_email;

        
    ?>

</body>

</html>