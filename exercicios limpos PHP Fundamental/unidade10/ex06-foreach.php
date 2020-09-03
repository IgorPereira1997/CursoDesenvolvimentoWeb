<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CURSO PHP FUNDAMENTAL</title>
</head>
<body>
    <?php
        $_agenda = array("nome" => "Igor",
                         "tel" => "1234-5678",
                         "idade" => 23,
                         "sal" => 0);
        foreach ($_agenda as $key => $value) {
            echo "$key: $value<br>";
        }
    ?>
</body>
</html>