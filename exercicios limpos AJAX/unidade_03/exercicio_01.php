<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP com AJAX</title>

</head>

<body>
    <div id="curso"></div>
    <script src="../_js/jquery.js"></script>
    
    <script>
        $('div#curso').load('dados.txt');
        alert("essa porra ta funcionado");
    </script>
</body>

</html>