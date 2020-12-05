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
    </style>
</head>

<body>
    <h1>Aula 7</h1>

    <?php
        echo "<h2>Operadores relacionais</h2>";
    
        echo 
        "
        <h3>Exercicio 3</h3>
        <p>Mostrar a situação de um aluno, de acordo com a sua média obtida.</p>
        ";

        $n1 = $_GET["n1"];
        echo "<p>Nota 1 = $n1.</p>";

        $n2 = $_GET["n2"];
        echo "<p>Nota 2 = $n2.</p>";

        $media = ($n1 + $n2) / 2;
        echo "<p>Média = $media.</p>";
        
        echo "<p>Resultado: " . (($media > 7) ? "Aprovado" : "Reprovado") . ".</p>"; 
    ?>
</body>

</html>