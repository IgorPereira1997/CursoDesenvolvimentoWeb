<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>PHP com AJAX</title>
</head>

<body>

    <script src="../_js/jquery.js"></script>
    <script>
        $.ajax({
            type: "GET",
            url: "https://samples.openweathermap.org/data/2.5/find?q=Recife&units=metric&appid=c71bca34a20eaf23751015c2310e9be4",
            async: false
        }).done(function(data){
            console.log(data.main);
        }).fail(function () {
            console.log("Falha"); 
        });
    </script>
</body>

</html>