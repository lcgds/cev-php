<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 13</h1>
    <h2>Estrutura de Repetição For</h2>

    <h3>Exercicio 1</h3>
    <p>Mostrar várias contagens utilizando a estrutura for.</p>

    <?php
        echo "<h4>Contagem progressiva</h4>";
        for ($i = 1; $i <= 10; $i++) {
            echo "$i ";
        }

        echo "<h4>Contagem regressiva</h4>";
        for ($i = 10; $i >= 1; $i--) {
            echo "$i ";
        }

        echo "<h4>Contagem de 5 até 50</h4>";
        for ($i = 5; $i <= 50; $i+=5) {
            echo "$i ";
        }
    ?>
</body>

</html>