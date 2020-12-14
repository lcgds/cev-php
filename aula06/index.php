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
    
        $a = 24;

        echo "<p>A = $a</p>";
        
        $b = 12;

        echo "<p>B = $b</p>";
        
        $c = $a + $b;

        echo "<p>C = A + B = $c</p>";

        $c = $c + 3; // ou $c += 5

        echo "<p>C = C + 3 = $c</p>";

        $c++; // ou $c = $c + 1 

        echo "<p>C++ (incremento em C) = $c</p>";
    ?>
    <a href="../">
        <input type="button" value="Voltar para o início">
    </a>
</body>

</html>