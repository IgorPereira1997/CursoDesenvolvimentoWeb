<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP com AJAX</title>
    <script src="../_js/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="_css/estilo.css">
</head>

<body>
    <button id="mostrar" >Carregar</button>
    <div id="listagem"></div>
    <script>
        $('button#mostrar').click(function(){
            $('div#listagem').css('display', 'block');
            carregarDados();
        });
        function carregarDados() {
            $.ajax({
                url: '_xml/produtos.xml'
            }).then(sucesso, falha);

            function sucesso(arquivo) {
                var elemento;
                elemento = "<ul>";
                $(arquivo).find('produto').each(function() {
                    var nome = $(this).find('nomeproduto').text();
                    var preco = $(this).find('precounitario').text() + "<br>";
                    elemento += "<li class='nome'>" + nome + "</li>";
                    elemento += "<li class='preco'>" + preco + "</li>";
                });
                elemento += "</ul>";
                $('div#listagem').html(elemento);
            }

            function falha() {

            }
        }
    </script>
</body>

</html>