<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="../style.css">
</head>

<body>
    <h1>Aula 6</h1>

    <?php
        echo "<h2>Operadores de atribuição</h2>";
    
        echo 
        "
        <h3>Exercicio 2</h3>
        <p>Vamos praticar o uso de variáveis referenciadas</p>
        ";

        $a = 3;
        $b = $a;
        $b += 5;

        echo "<p>A variável 'a' vale $a e a variável 'b' vale $b.</p>";

        $a = 3;
        $b = &$a;
        $b += 5;

        echo "<p>A variável 'a'  referenciada pela variável 'b' vale $a e a variável 'b' vale $b.</p>";

    ?>
</body>

</html>