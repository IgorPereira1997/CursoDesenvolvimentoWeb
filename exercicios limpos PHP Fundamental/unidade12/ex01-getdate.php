<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP FUNDAMENTAL</title>
</head>

<body>
    <pre>
        <?php
            date_default_timezone_set("Brazil/East");
            $agora = getDate();
            print_r($agora);
        ?>
    </pre>
    <pre>
        <?php
            print_r(gettimeofday());
        ?>
    </pre>
</body>

</html>