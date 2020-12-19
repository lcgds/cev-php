<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 15</h1>
    <h2>Funções em PHP – Parte 2</h2>

    <h3>Exercicio 1</h3>
    <p>Criar um procedimento que use a passagem de parâmetros por referência.</p>

    <?php
        function teste(&$x) {
            $x += 2;
            echo "<p>O valor de X é $x.</p>";
        }

        $n = 3;
        teste($n); //Retorna 5
        echo "<p>O valor de N é $n.</p>"; //Retorna 5
    ?>

</body>

</html>