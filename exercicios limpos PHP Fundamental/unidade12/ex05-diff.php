<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $_data1 = new DateTime('2021-01-01');
            $_data2 = new DateTime('2020-08-30');
            $_interval = $_data1->diff($_data2);
        ?>

        <pre>
            <?php
                print_r($_interval);
            ?>
        </pre>

        <pre>
            <?php
                print_r($_interval->format('%a'));
            ?>
        </pre>
    </body>
</html>