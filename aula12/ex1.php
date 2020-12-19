<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 12</h1>
    <h2>Estrutura de Repetição Do While</h2>

    <h3>Exercicio 1</h3>
    <p>Mostrar uma contagem progressiva de 1 até 10.</p>

    <?php
        echo "<h4>Contagem progressiva</h4>";
        $c = 1;

        do {
            echo "$c ";
            $c++;
        } while($c <= 10);

        echo "<h4>Contagem regressiva</h4>";
        $c = 10;
        do {
            echo "$c ";
            $c--;
        } while($c >= 1);
    ?>
</body>

</html>