<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP com AJAX</title>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css">

</head>

<body>
    <button id="botao">Carregar JSON</button>
    <div id="listagem"></div>
    <script src="../_js/jquery.js"></script>
    <script>
        $('button#botao').click(function(){
            $('div#listagem').css('display', 'block');
            carregarDados();
        });

        function carregarDados() {
            $.getJSON('_json/produtos.json', function(data) {
                var elemento;
                elemento = "<ul>";
                $.each(data, function(i, valor) {
                    elemento += "<li class='nome'>" + valor.nomeproduto + "</li>";
                    elemento += "<li class='preco'>" + valor.precounitario + "</li>";
                });
                elemento += "</ul>";

                $('div#listagem').html(elemento);
            });
        }
    </script>
</body>

</html>