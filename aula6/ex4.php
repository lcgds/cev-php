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
    <h1>Aula 6</h1>

    <?php
        echo "<h2>Operadores de atribuição</h2>";
    
        echo 
        "
        <h3>Exercicio 2</h3>
        <p>Vamos praticar o uso de variáveis de variáveis</p>
        ";

        $x = "abc";

        echo "<p>A variável 'x' vale $x.</p>";

        $$x = "def";

        echo "<p>A variável 'abc' (criada a partir da variável 'x') vale $abc.</p>";
    ?>
</body>

</html>