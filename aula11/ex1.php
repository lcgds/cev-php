<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        body {
            font-family: Verdana, sans-serif;
        }

        h1 {
            color: blue;
        }

        h2 {
            color: green;
        }
        br {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <h1>Aula 11</h1>
    <h2>Estrutura de Repetição While</h2>

    <h3>Exercicio 1</h3>
    <p>Mostrar uma contagem de 1 até 10.</p>

    <?php
        echo "<h4>Contagem progressiva</h4>";
        $c = 1;
        while($c <= 10) {
            echo "$c<br>";
            $c++;
        }

        echo "<h4>Contagem regressiva</h4>";
        $c = 10;
        while($c >= 1) {
            echo "$c<br>";
            $c--;
        }
    ?>
</body>

</html>